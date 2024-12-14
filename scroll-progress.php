<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scroll Progress</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        body {background-color: #212923; font-family: 'Helvetica Neue', Arial, sans-serif; color: #f8faf9; margin: 0; padding: 0; box-sizing: border-box; line-height: 1.6;}
        #scroll-progress {position: fixed; top: 0; left: 0; height: 5px; background-color: #0f6126; width: 0%; z-index: 9999;}
        .content {margin-top: 20px; padding: 30px; text-align: center; font-size: 1.125rem; background-color: #2d3438; border-radius: 10px; box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.1), -4px -4px 10px rgba(255, 255, 255, 0.1);}
        .container {max-width: 1200px; margin: 0 auto;}
        footer {background-color: #212923; color: #e6d265; padding: 20px 0; text-align: center; font-size: 1rem; box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.2);}
        .long-content {height: 2000px; padding: 20px; background-color: #121417;}
        h1, h2, h3, h4, h5, h6 {font-weight: 700; color: #e6d265; margin-bottom: 20px;}
        p {color: #f8faf9; margin-bottom: 15px;}
        .interactive:hover {transform: scale(1.05); transition: all 0.3s ease-in-out;}
        .row {display: flex; flex-wrap: wrap; margin-right: 0; margin-left: 0;}
        .col {padding: 20px; flex: 1 1 25%; margin-bottom: 20px;}
        button {background-color: #2d3438; border: none; color: #f8faf9; font-size: 1rem; padding: 10px 20px; border-radius: 20px; box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.1), -4px -4px 10px rgba(255, 255, 255, 0.1); transition: transform 0.2s ease;}
        button:hover {transform: translateY(-5px); box-shadow: 4px 4px 20px rgba(0, 0, 0, 0.15), -4px -4px 20px rgba(255, 255, 255, 0.2);}
        @media (max-width: 768px) {.col {flex: 1 1 100%;} .content {font-size: 1rem;}}
    </style>
</head>
<body>
    <div id="scroll-progress"></div>
    <div class="content">
        <h1>Scroll the page to view the progress!</h1>
        <div class="long-content">
            <p>Scroll down to see the progress bar change!</p>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 Kim Boeckx Open source template.</p>
    </footer>
    <script src="js/bootstrap.js"></script>
    <script>
        window.onscroll = function() {
            var scrollHeight = document.documentElement.scrollHeight - window.innerHeight;
            var scrollPosition = window.scrollY;
            var scrollPercentage = (scrollPosition / scrollHeight) * 100;
            document.getElementById('scroll-progress').style.width = scrollPercentage + '%';
        };
    </script>
</body>
</html>
