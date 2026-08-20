<!DOCTYPE html>
<html>
<head>
    <title>Student Home</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #0d0b12;
            color: white;
            min-height: 100vh;
        }

        .container {
            width: 90%;
            max-width: 1100px;
            margin: auto;
            padding: 30px 0;
        }

        .badge {
            display: inline-block;
            background: #241329;
            color: #ff4fa3;
            border: 1px solid #ff4fa3;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 13px;
            margin-bottom: 35px;
        }

        .main {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 50px;
            min-height: 500px;
        }

        .left {
            flex: 1;
        }

        .left h1 {
            font-size: 55px;
            line-height: 1.05;
            margin-bottom: 25px;
        }

        .pink {
            color: #ff4fa3;
        }

        .left p {
            color: #aaa;
            line-height: 1.7;
            max-width: 600px;
            margin-bottom: 30px;
        }

        .buttons {
            display: flex;
            gap: 12px;
        }

        .btn {
            text-decoration: none;
            padding: 13px 22px;
            border-radius: 6px;
            font-weight: bold;
            font-size: 14px;
        }

        .primary {
            background: #ff4fa3;
            color: white;
        }

        .secondary {
            background: #18151e;
            color: white;
            border: 1px solid #444;
        }

        .card {
            width: 330px;
            background: #17151e;
            border: 1px solid #292531;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.4);
        }

        .card h2 {
            margin-bottom: 25px;
            font-size: 20px;
        }

        .info {
            margin-bottom: 18px;
        }

        .label {
            color: #777;
            font-size: 12px;
            text-transform: uppercase;
            margin-bottom: 5px;
        }

        .value {
            color: white;
            font-size: 15px;
        }

        .footer {
            text-align: center;
            color: #555;
            font-size: 12px;
            padding: 20px;
        }

        @media (max-width: 800px) {
            .main {
                flex-direction: column;
                text-align: center;
            }

            .left p {
                margin-left: auto;
                margin-right: auto;
            }

            .buttons {
                justify-content: center;
            }

            .card {
                width: 100%;
                max-width: 400px;
            }

            .left h1 {
                font-size: 42px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <span class="badge">● STUDENT PAGE</span>

    <div class="main">

        <div class="left">

            <h1>
                Welcome to my<br>
                <span class="pink">Student Page.</span>
            </h1>

            <p>
                Welcome to my student profile. Here you can view my
                basic information and student details.
            </p>

            <div class="buttons">
                <a href="student/profile" class="btn primary">
                    View My Profile →
                </a>

                <a href="mailto:eunicemiranda@gmail.com" class="btn secondary">
                    Contact Me
                </a>
            </div>

        </div>


        <div class="card">

            <h2>Basic Info</h2>

            <div class="info">
                <div class="label">Student ID</div>
               <div class="value">MCC2024-00158</div>
            </div>

            <div class="info">
                <div class="label">Name</div>
                <div class="value">Eunice Miranda</div>
            </div>

            <div class="info">
                <div class="label">Course</div>
                <div class="value">BS Information Technology</div>
            </div>

            <div class="info">
                <div class="label">Year Level</div>
                <div class="value">3rd Year</div>
            </div>

            <div class="info">
                <div class="label">Section</div>
                <div class="value">3F4</div>
            </div>

        </div>

    </div>

</div>

<div class="footer">
    © 2026 Student Page • LavaLust
</div>

</body>
</html>