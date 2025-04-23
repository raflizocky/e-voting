<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary: #2c3e50;
            --secondary: #3498db;
            --accent: #e74c3c;
            --light: #ecf0f1;
            --dark: #2c3e50;
        }

        body {
            background: linear-gradient(135deg, #3498db 0%, #2c3e50 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .voting-container {
            max-width: 1000px;
            width: 100%;
        }

        .card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        }

        .card-header {
            background-color: var(--primary);
            color: white;
            text-align: center;
            padding: 25px;
            border-bottom: 4px solid var(--accent);
        }

        .icon-wrapper {
            width: 80px;
            height: 80px;
            background-color: var(--accent);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            box-shadow: 0 5px 15px rgba(231, 76, 60, 0.3);
        }

        .form-control {
            border: 2px solid #ddd;
            border-radius: 10px;
            padding: 12px 20px;
            height: auto;
            background-color: #f8f9fa;
            transition: all 0.3s;
        }

        .form-control:focus {
            border-color: var(--secondary);
            box-shadow: 0 0 0 0.2rem rgba(52, 152, 219, 0.25);
        }

        .input-group-text {
            border: 2px solid #ddd;
            border-right: none;
            background-color: white;
            border-radius: 10px 0 0 10px;
        }

        .input-group .form-control {
            border-left: none;
            border-radius: 0 10px 10px 0;
        }

        .btn-primary {
            background-color: var(--accent);
            border: none;
            border-radius: 10px;
            padding: 12px;
            font-weight: 600;
            letter-spacing: 1px;
            box-shadow: 0 4px 6px rgba(231, 76, 60, 0.2);
            transition: all 0.3s;
        }

        .btn-primary:hover {
            background-color: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 6px 8px rgba(231, 76, 60, 0.3);
        }

        .left-pane {
            background-color: #f8f9fa;
            padding: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .right-pane {
            padding: 40px;
            background-color: white;
        }

        .ballot-box {
            position: relative;
            width: 200px;
            height: 200px;
            margin-bottom: 20px;
        }

        .box {
            width: 100%;
            height: 160px;
            background-color: var(--primary);
            border-radius: 15px;
            position: relative;
            box-shadow: 0 5px 15px rgba(44, 62, 80, 0.3);
            overflow: hidden;
        }

        .box-slot {
            width: 80%;
            height: 15px;
            background-color: #1a2530;
            position: absolute;
            top: 30px;
            left: 10%;
            border-radius: 5px;
        }

        .ballot {
            position: absolute;
            width: 50px;
            height: 60px;
            background-color: white;
            border: 2px solid #ddd;
            top: 0;
            left: 75px;
            transform-origin: center bottom;
            animation: insertBallot 8s infinite ease-in-out;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .ballot:before {
            content: '';
            position: absolute;
            top: 10px;
            left: 10px;
            width: 25px;
            height: 25px;
            border: 2px solid var(--accent);
            border-radius: 50%;
        }

        .ballot:after {
            content: '';
            position: absolute;
            top: 16px;
            left: 16px;
            width: 13px;
            height: 13px;
            background-color: var(--accent);
            border-radius: 50%;
        }

        .features {
            margin-top: 30px;
            text-align: center;
        }

        .features h4 {
            color: var(--primary);
            margin-bottom: 15px;
            font-weight: 600;
        }

        .features p {
            color: #7f8c8d;
        }

        .feature-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            text-align: left;
        }

        .feature-icon {
            width: 40px;
            height: 40px;
            background-color: rgba(52, 152, 219, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--secondary);
            margin-right: 15px;
            font-size: 16px;
        }

        @keyframes insertBallot {
            0% {
                transform: translateY(-20px) rotate(-5deg);
            }

            20% {
                transform: translateY(0) rotate(0);
            }

            25% {
                transform: translateY(10px) rotate(0);
                opacity: 1;
            }

            30% {
                transform: translateY(80px) rotate(0);
                opacity: 0;
            }

            40% {
                transform: translateY(-20px) rotate(5deg);
                opacity: 0;
            }

            50% {
                transform: translateY(-20px) rotate(-5deg);
                opacity: 1;
            }

            70% {
                transform: translateY(0) rotate(0);
            }

            75% {
                transform: translateY(10px) rotate(0);
                opacity: 1;
            }

            80% {
                transform: translateY(80px) rotate(0);
                opacity: 0;
            }

            90% {
                transform: translateY(-20px) rotate(5deg);
                opacity: 0;
            }

            100% {
                transform: translateY(-20px) rotate(-5deg);
                opacity: 1;
            }
        }

        .register-link {
            color: var(--secondary);
            font-weight: 500;
            transition: all 0.3s;
            text-decoration: none;
        }

        .register-link:hover {
            color: var(--accent);
        }

        .alert {
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container voting-container">
        <div class="card">
            <div class="card-header">
                <div class="icon-wrapper">
                    <i class="fas fa-vote-yea fa-2x text-white"></i>
                </div>
                <h3 class="mb-0">E-Voting System</h3>
            </div>

            <div class="row g-0">
                <!-- Left side with animation -->
                <div class="col-lg-5 left-pane">
                    <div class="ballot-box">
                        <div class="ballot"></div>
                        <div class="box">
                            <div class="box-slot"></div>
                        </div>
                    </div>

                    <div class="features">
                        <h4>Secure Digital Voting</h4>
                        <p class="text-muted mb-4">Your vote matters. Make it count securely.</p>

                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div>
                                <strong>End-to-end encryption</strong>
                            </div>
                        </div>

                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-user-lock"></i>
                            </div>
                            <div>
                                <strong>Verified voter authentication</strong>
                            </div>
                        </div>

                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-chart-bar"></i>
                            </div>
                            <div>
                                <strong>Real-time results</strong>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right side with login form -->
                <div class="col-lg-7 right-pane">
                    @include('login.components.alert')

                    @include('login.components.form')
                </div>
            </div>
        </div>

        <div class="text-center mt-3">
            <p class="text-white">© 2025 E-Voting System. All rights reserved.</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src={{ asset('template/vendor/jquery/jquery.min.js') }}></script>
    <script src={{ asset('template/vendor/jquery-easing/jquery.easing.min.js') }} defer></script>
    <script src="{{ asset('template/js/sb-admin-2.min.js') }}" defer></script>
</body>

</html>
