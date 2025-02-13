<?php

namespace App\Http\Controllers;

use App\Models\ChatResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ChatController extends Controller
{
    /**
     * Store a new question and answer in the database and update the questions.json file.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'question' => 'required|string',
            'answer' => 'required|string'
        ]);

        // Store a new question and answer in the database
        $question = new ChatResponse();
        $question->question = $request->input('question');
        $question->answer = $request->input('answer');
        $question->save();

        // Update the questions.json file after adding the new question and answer
        $this->updateQuestionsJson();

        return response()->json(['message' => 'Question and answer added successfully']);
    }

    /**
     * Update the questions.json file by fetching data from the database.
     */
    public function updateQuestionsJson()
    {
        \Log::info('Updating questions.json...'); // This will log to the storage/logs/laravel.log file.

        $questions = ChatResponse::all(); // Get all questions and answers

        if ($questions->isEmpty()) {
            return response()->json(['message' => 'No questions found in the database'], 404);
        }

        // Prepare the data to be saved in the JSON file
        $jsonData = [];
        foreach ($questions as $question) {
            $jsonData[] = [
                'question' => $question->question,
                'answer' => $question->answer
            ];
        }

        // Encode the data in JSON format
        $jsonData = json_encode(['questions' => $jsonData], JSON_PRETTY_PRINT);

        // Ensure the storage directory exists before saving
        if (!Storage::exists('public')) {
            Storage::makeDirectory('public');
        }

        // Save the updated JSON data to the file in storage/app/public/questions.json
        Storage::disk('public')->put('questions.json', $jsonData);

        return response()->json(['message' => 'questions.json updated successfully']);
    }

    /**
     * Fetch all questions and answers from the database dynamically and store them in the JSON file.
     */
    public function getQuestions()
    {
        $questions = ChatResponse::all(); // Get all questions and answers

        if ($questions->isEmpty()) {
            return response()->json(['message' => 'No questions found in the database'], 404);
        }

        $jsonData = [];
        foreach ($questions as $question) {
            $jsonData[] = [
                'question' => $question->question,
                'answer' => $question->answer
            ];
        }

        $jsonData = json_encode(['questions' => $jsonData], JSON_PRETTY_PRINT);

        // Ensure the storage directory exists before saving
        if (!Storage::exists('public')) {
            Storage::makeDirectory('public');
        }

        // Save the JSON data to a file in storage/app/public/questions.json
        Storage::disk('public')->put('questions.json', $jsonData);

        return response()->json(['questions' => $jsonData]);
    }

    /**
     * Update a question and answer by ID.
     */
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'question' => 'required|string',
            'answer' => 'required|string'
        ]);

        // Find the question by ID and update
        $question = ChatResponse::find($id);

        if (!$question) {
            return response()->json(['message' => 'Question not found'], 404);
        }

        $question->question = $request->input('question');
        $question->answer = $request->input('answer');
        $question->save();

        // Update the questions.json file after updating the question and answer
        $this->updateQuestionsJson();

        return response()->json(['message' => 'Question and answer updated successfully']);
    }

    /**
     * Delete a question and answer by ID.
     */
    public function delete($id)
    {
        // Find the question by ID
        $question = ChatResponse::find($id);

        if (!$question) {
            return response()->json(['message' => 'Question not found'], 404);
        }

        // Delete the question and answer from the database
        $question->delete();

        // Update the questions.json file after deleting the question
        $this->updateQuestionsJson();

        return response()->json(['message' => 'Question and answer deleted successfully']);
    }
}
