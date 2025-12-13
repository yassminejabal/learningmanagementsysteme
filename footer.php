<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .footer {
        background-color: #333;
        color: #fff;
        padding: 20px 0;
        font-family: Arial, sans-serif;
        margin-top: 50px;
    }

    .footer-container {
        width: 90%;
        max-width: 1200px;
        margin: auto;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .footer-left,
    .footer-center,
    .footer-right {
        flex: 1;
        min-width: 200px;
        margin: 10px 0;
    }

    .footer h3 {
        margin-bottom: 10px;
    }

    .footer p {
        margin: 5px 0;
        font-size: 14px;
    }

    .social-icons {
        display: flex;
        gap: 10px;
    }

    .social {
        background-color: #555;
        color: #fff;
        padding: 5px 10px;
        border-radius: 5px;
        text-decoration: none;
        font-size: 13px;
        transition: 0.3s;
    }

    .social:hover {
        background-color: #3498db;
    }
</style>

<body>
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-left">
                <h3>MonSite</h3>
                <p>© 2025 Tous droits réservés</p>
            </div>
            <div class="footer-center">
                <p>Contactez-nous:</p>
                <p>Email: contact@monsite.com</p>
                <p>Tél: +212 600 000 000</p>
            </div>
            <div class="footer-right">
                <p>Suivez-nous:</p>
                <div class="social-icons">
                    <a href="#" class="social">Facebook</a>
                    <a href="#" class="social">Twitter</a>
                    <a href="#" class="social">Instagram</a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>