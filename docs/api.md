# API Documentation v1

## Authentication

### 1. Register

- **Method:** POST
- **URL:** `/api/v1/register`
- **Body:** `name`, `email`, `password`, `password_confirmation`
- **Response:**
    ```json
    {
        "success": true,
        "message": "User registered successfully",
        "data": { "token": "1|..." }
    }
    ```
