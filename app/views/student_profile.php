<!DOCTYPE html>
<html>
<head>
    <title>Student Profile</title>

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
            max-width: 850px;
            margin: auto;
            padding: 30px 0;
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 40px;
        }

        .student {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .avatar {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: #ff4fa3;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        .student h2 {
            font-size: 17px;
        }

        .student p {
            color: #777;
            font-size: 12px;
            margin-top: 4px;
        }

        .status {
            color: #4cff9a;
            background: #10251a;
            border: 1px solid #225936;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 11px;
        }

        .profile-card {
            background: #121017;
            border: 1px solid #28242f;
            border-radius: 10px;
            padding: 35px;
        }

        .profile-card h1 {
            font-size: 35px;
            margin-bottom: 10px;
        }

        .subtitle {
            color: #888;
            margin-bottom: 35px;
        }

        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .info-box {
            background: #0c0a0f;
            padding: 22px;
            border-radius: 6px;
            border: 1px solid #1f1c24;
        }

        .label {
            color: #666;
            font-size: 11px;
            text-transform: uppercase;
            margin-bottom: 8px;
        }

        .value {
            font-size: 15px;
        }

        .connect {
            margin-top: 35px;
        }

        .connect h3 {
            margin-bottom: 15px;
        }

        .links {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .links a {
            color: #aaa;
            text-decoration: none;
        }

        .links a:hover {
            color: #ff4fa3;
        }

        .back {
            display: inline-block;
            margin-top: 30px;
            padding: 12px 20px;
            background: #ff4fa3;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
        }

        @media (max-width: 600px) {
            .info-grid {
                grid-template-columns: 1fr;
            }

            .header {
                align-items: flex-start;
            }

            .profile-card {
                padding: 25px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <div class="header">

        <div class="student">

            <div class="avatar">
                EM
            </div>

            <div>
                <h2>Eunice Miranda</h2>
                <p>BS Information Technology</p>
            </div>

        </div>

        <span class="status">● STUDENT</span>

    </div>


    <div class="profile-card">

        <h1>Student Profile</h1>

        <p class="subtitle">
            Personal and academic information
        </p>


        <div class="info-grid">

            <div class="info-box">
                <div class="label">Student ID</div>
               <div class="value">MCC2024-00158</div>
            </div>

            <div class="info-box">
                <div class="label">Year Level</div>
                <div class="value">3rd Year</div>
            </div>

            <div class="info-box">
                <div class="label">Section</div>
                <div class="value">3F4</div>
            </div>

            <div class="info-box">
                <div class="label">Email</div>
                <div class="value">
                    eunicemiranda@gmail.com
                </div>
            </div>

        </div>


        <div class="connect">

            <h3>Let's Connect ♡</h3>

            <div class="links">

                <a href="mailto:eunicemiranda@gmail.com">
                    📧 eunicemiranda@gmail.com
                </a>

                <a href="#">
                    📱 Student Contact
                </a>

                <a href="#">
                    📷 Instagram
                </a>

                <a href="#">
                    🟦 Facebook
                </a>

            </div>

        </div>


        <a href="../student" class="back">
            ← Back to Home
        </a>

    </div>

</div>

</body>
</html>