# OmniTrader API

This project provides an API for analyzing cryptocurrency chart images using locally hosted **LM Studio** models such as `mistralai/mistral-small-3.2` or vision-language models like `llava:7b`. The API accepts chart screenshots, analyzes them via AI-powered strategies (e.g., MA9-based entry points), and returns a recommendation (`Buy` / `Do Not Buy`) with optional commentary.

---

## 🔧 Features

- Upload one or more **chart screenshots** (`.jpg`, `.jpeg`, `.png`) via a browser form or API.
- Automatically analyze charts using AI and return structured insights.
- Uses **Vision-Language Models (VLMs)** running on [LM Studio](https://lmstudio.ai) locally.
- Reads domain-specific prompts from external files for flexibility.
- Based on **Laravel 10.x**, clean structure and scalable foundation.

---

## 🚀 LM Studio Integration

This app connects to a running **LM Studio server** via HTTP and supports vision-capable models. The recommended setup:

1. Download LM Studio: [https://lmstudio.ai](https://lmstudio.ai)
2. Load a supported VLM model (e.g. `qwen2-vl-2b-instruct`, `llava:7b`, or `mistralai/mistral-small-3.2`)
3. Ensure your model is **loaded and supports image input**
4. API calls are sent to:  
   ```
   http://localhost:1234/api/v0/chat/completions
   ```

---

## 🧠 Technical Strategy

We use a **two-step architecture**:

1. **Image Summary with LLaVA** (optional):  
   If enabled, a vision-language model is used to describe chart features.

2. **Final Decision with Mistral**:  
   Based on the extracted information (or raw image), Mistral uses a detailed trading prompt loaded from `storage/app/prompts/sol_system_prompt.txt` to make a BUY/DO NOT BUY recommendation.

---

## 📁 API Endpoints

| Method | Endpoint           | Description                        |
|--------|--------------------|------------------------------------|
| GET    | `/upload-form`     | View the HTML image upload form    |
| POST   | `/analyze-images`  | Upload and analyze chart images    |

**Request Example:**

```bash
curl -F "images[]=@chart1.jpg" http://localhost:8000/analyze-images
```

---

## ✅ Requirements

- PHP 8.2+
- Laravel 10
- SQLite (default, preconfigured)
- LM Studio installed and running
- At least 16GB RAM (recommended for larger models like Mistral)

---

## 🧪 Testing & Logging

- All requests are logged using Laravel’s default logging system.
- Sample logs include payload size, inference time, and model responses.
- [WIP] Add PHPUnit tests for endpoint validation and mock inference results.

---

## 📝 Setup Instructions

1. Clone this repository
2. Copy `.env.example` to `.env` and update if necessary
3. Install dependencies:

```bash
composer install
php artisan migrate
php artisan serve
```

4. Start **LM Studio** and load your model
5. Visit `http://localhost:8000/upload-form` to begin

---

## 📂 Project Structure Highlights

- `app/Http/Controllers/ChartAnalysisController.php`: Main logic
- `resources/views/upload.blade.php`: Upload UI
- `storage/app/prompts/sol_system_prompt.txt`: Trading strategy used by Mistral

---

## 🔒 Security Note

This API **does not include authentication** and is meant for **local experimentation or internal use** only. Use Laravel Sanctum or Passport to add authentication if deploying publicly.
