<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        header {
            background: #007bff;
            color: white;
            text-align: center;
            padding: 20px;
        }

        .container {
            width: 90%;
            max-width: 1000px;
            margin: 30px auto;
        }

        .card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            overflow: hidden;
            margin-bottom: 30px;
        }

        .card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .card-content {
            padding: 20px;
        }

        .card-content h2 {
            margin-top: 0;
            color: #333;
        }

        .card-content p {
            color: #555;
            line-height: 1.6;
        }

        footer {
            text-align: center;
            background: #222;
            color: white;
            padding: 15px;
        }

        @media (min-width: 768px) {
            .grid {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 20px;
            }

            .card img {
                height: 200px;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>Welcome to My Website</h1>
    <p>Photo Gallery with Descriptions</p>
</header>

<div class="container">

    <div class="grid">

        <div class="card">
            <img src="Ru1.jpg" alt="Photo 1">
            <div class="card-content">
                <h2>Beautiful Nature</h2>
                <p>This photo shows a peaceful natural landscape. Perfect example of calm and beauty in nature.</p>
            </div>
        </div>

       

    </div>

</div>

<footer>
    © 2026 My Website | Designed by Ruwan
</footer>

</body>
</html>
