<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function uploadChunk(Request $request)
    {
        $chunk = $request->file('chunk');
        $fileName = $request->input('file_name');
        $chunkIndex = $request->input('chunk_index');
        $totalChunks = $request->input('total_chunks');

        // Store the chunk temporarily
        $chunkPath = storage_path('app/temp_chunks/'.$fileName.'.'.$chunkIndex);
        $chunk->move(storage_path('app/temp_chunks'), $fileName . '.' . $chunkIndex);

        // If this is the last chunk, merge the video
        if ($chunkIndex == $totalChunks - 1) {
            $this->mergeChunks($fileName, $totalChunks);
        }

        return response()->json(['message' => 'Chunk uploaded']);
    }

    public function mergeChunks($fileName, $totalChunks)
    {
        $filePath = storage_path('app/videos/'.$fileName);

        // Create/append each chunk to the final file
        $file = fopen($filePath, 'ab'); // Open the file for appending
        for ($i = 0; $i < $totalChunks; $i++) {
            $chunkPath = storage_path('app/temp_chunks/'.$fileName . '.' . $i);
            $chunkContent = file_get_contents($chunkPath);
            fwrite($file, $chunkContent);  // Append chunk to file
            unlink($chunkPath);  // Delete the chunk after appending
        }
        fclose($file); // Close the file
    }
}
