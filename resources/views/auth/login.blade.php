<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Login to Aqua De Smiley – Water Refilling Station management portal.">
    <title>Login – Aqua De Smiley</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --primary:      #0284c7;
            --primary-dark: #0369a1;
            --accent:       #0284c7;
        }

        body {
            font-family: 'Outfit', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #0b1329 0%, #0f172a 50%, #1e293b 100%);
            color: #1e293b;
        }

        /* ── BACKGROUND ── */
        .bg-image {
            position: fixed; inset: 0;
            background-image: url('/images/login-bg.png');
            background-size: cover;
            background-position: center;
            opacity: 0.18;
            filter: saturate(1.2);
            z-index: 0;
        }

        .bg-overlay {
            position: fixed; inset: 0;
            background: linear-gradient(
                135deg,
                rgba(11, 19, 41, 0.92) 0%,
                rgba(15, 23, 42, 0.88) 50%,
                rgba(30, 41, 59, 0.92) 100%
            );
            z-index: 1;
        }

        /* Animated floating bubbles */
        .bubble {
            position: fixed;
            border-radius: 50%;
            background: radial-gradient(circle at 35% 35%, rgba(14,165,233,.22), rgba(2,132,199,.04));
            border: 1px solid rgba(14,165,233,.18);
            animation: floatBubble linear infinite;
            z-index: 1;
        }
        .bubble:nth-child(1) { width: 100px; height: 100px; left: 10%; animation-duration: 14s; animation-delay: 0s; }
        .bubble:nth-child(2) { width: 60px;  height: 60px;  left: 25%; animation-duration: 10s; animation-delay: -4s; }
        .bubble:nth-child(3) { width: 140px; height: 140px; left: 70%; animation-duration: 18s; animation-delay: -6s; }
        .bubble:nth-child(4) { width: 40px;  height: 40px;  left: 85%; animation-duration: 9s;  animation-delay: -2s; }
        .bubble:nth-child(5) { width: 80px;  height: 80px;  left: 50%; animation-duration: 13s; animation-delay: -8s; }

        @keyframes floatBubble {
            0%   { transform: translateY(110vh) scale(1); opacity: 0; }
            10%  { opacity: 1; }
            90%  { opacity: .7; }
            100% { transform: translateY(-10vh) scale(1.1); opacity: 0; }
        }

        /* ── LOGIN CARD ── */
        .login-wrapper {
            position: relative; z-index: 10;
            width: 100%; max-width: 440px;
            padding: 1.5rem;
            animation: slideUp .6s cubic-bezier(.16,1,.3,1) both;
        }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(30px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        .login-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 24px;
            padding: 2.5rem 2.25rem;
            box-shadow:
                0 20px 45px -10px rgba(2, 132, 199, 0.12),
                0 1px 3px rgba(0,0,0,0.06);
        }

        /* ── LOGO AREA ── */
        .logo-area {
            text-align: center;
            margin-bottom: 2rem;
        }
        .logo-icon {
            width: 72px; height: 72px; border-radius: 20px; margin: 0 auto 1rem;
            background: #e0f2fe;
            border: 1px solid #bae6fd;
            display: grid; place-items:
