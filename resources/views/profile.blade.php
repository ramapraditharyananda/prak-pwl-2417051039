<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', 'Segoe UI', Arial, sans-serif;
            min-height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 60px 20px;
            background: radial-gradient(circle at top, #1b2a4a, #050914 70%);
        }

        .card {
            width: 340px;
            background: rgba(255, 255, 255, 0.06);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 24px;
            padding: 40px 28px;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5);
        }

        .avatar-ring {
            width: 170px;
            height: 170px;
            border-radius: 50%;
            padding: 5px;
            background: linear-gradient(135deg, #38bdf8, #6366f1, #a855f7);
            margin-bottom: 36px;
            box-shadow: 0 0 30px rgba(56, 189, 248, 0.35);
        }

        .avatar-circle {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: #0f172a;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .avatar-circle img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .avatar-circle svg {
            width: 90px;
            height: 90px;
            fill: #64748b;
        }

        .info-box {
            width: 100%;
            border-radius: 14px;
            padding: 16px 20px;
            margin-bottom: 14px;
            text-align: center;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .info-label {
            font-size: 11px;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: #7dd3fc;
            margin-bottom: 4px;
        }

        .info-value {
            font-size: 19px;
            font-weight: 600;
            color: #f8fafc;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="avatar-ring">
            <div class="avatar-circle">
                <img src="{{ asset('profile.jpeg') }}" alt="Foto Profil" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                <svg viewBox="0 0 24 24" style="display:none;">
                    <path d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-3.3 0-10 1.7-10 5v3h20v-3c0-3.3-6.7-5-10-5z"/>
                </svg>
            </div>
        </div>

        <div class="info-box">
            <div class="info-value">{{ $name }}</div>
        </div>

        <div class="info-box">
            <div class="info-value">{{ $kelas }}</div>
        </div>

        <div class="info-box">
            <div class="info-value">{{ $npm }}</div>
        </div>
    </div>
</body>
</html>