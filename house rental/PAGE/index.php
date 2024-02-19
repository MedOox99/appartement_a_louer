<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="33.png">
    <title>House Rental</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background: linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5)), url(1.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            height: 80vh;
        }
        p {
            text-align: justify;
            margin-bottom: 1.5rem;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        header {
            text-align: center;
            color: white;
            padding: 1rem;
            width: 40%;
            height: 665px;
            position: relative;
        }

        header img {
            max-width: 60%;
            height: auto;
            display: block;
            margin: 0 auto;
            margin-top: 25%;
            width: 50%;
        }

        main {
            color: white;
            padding: 2rem;
            padding-top: 70px;
            width: 45%;
            position: absolute;
            left: 45%;
            height: 600px;
        }

        .section-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        a {
            color: #4CAF50;
            text-decoration: none;
            font-size: 10px;
        }

        a:hover {
            text-decoration: underline;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 0.5rem;
        }

        div {
            display: flex;
        }

        .site-footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #f0f0f0; /* يمكنك تغيير لون الخلفية حسب احتياجاتك */
            text-align: center;
            padding: 10px;
            height: 25px;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
            position: absolute;
            right:30%;

        }

        li {
            display: inline-block;
            margin-right: 10px;
        }

        a {
            text-decoration: none;
            color: #333; /* لون النص */
        }
        h1.h1,
        h1.h2 {
            color: #000000;
            display: inline; /* أو استخدام inline-block إذا كنت ترغب في إضافة هوامش */
            font-size: 3rem; /* حجم الخط الخاص بك */
            font-weight: bold;
            margin: 0; /* للتخلص من الهوامش الافتراضية للعناصر */
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        h1.h2 {
            color: #2798D0; /* لون الخط الثاني */
            margin-left: 5px; /* تحديد المسافة بين العناصر */
        }
        .ling{
            margin-top: 60px;
            border: 2px solid white;
            height: 580px;
            border-radius: 50px;
        }
        input[type="submit"] {
            background-color: #2291E0;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            margin-top: 1rem;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
            width: 200px;
            height: 50px;
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.7);
        }

        input[type="submit"]:hover {
            background-color:skyblue;
        }

        .in{
            display: flex;
            width: 80%;
            text-align: center;
            color: white;

            padding-left: 130px;
        }
        .in1{
            margin-left: 20px;
        }

/* p{
    margin: 0;
    font-size: 10px;
}

select{
    margin: 0;
    padding: 0;
    position: absolute;
    right: 90%;
} */
.divf {
        display: flex;
        justify-content: space-between;
        color: black; /* لون النص */
        margin-right: 20px;
    }

    .divf p {
        margin: 0;
        align-self: center; /* وضع النص في الوسط عموديًا */
    }

    .divf ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
    }

    

    .divf select {
        margin-left: 30PX; /* يوضع في أقصى اليمين */

    }

        
    </style>
</head>
<body>
    <div>
    <header>
        <img src="33.png" alt="Logo">
        <h1 class="h1">HOUSE </h1><h1 class="h2">RENTAL</h1>
    </header>
    <div class="ling"></div>
    <main>
    <p>
        Welcome to the house rental website, the primary destination for those searching for homes to rent and property owners alike. 
        We take pride in providing you with a unique experience that allows you to find the ideal home or list your property with ease.
    </p>

    <h1>For the property owner:</h1>

    <p>
        Click on the "The Property Owner" button to start marketing your house. 
        You can add detailed information and attractive photos to showcase your property in the listings. 
        You can also set rental conditions and interact directly with interested tenants.
    </p>

    <h1>For the tenant:</h1>

    <p>
        Use the "The Tenant" button to browse available homes. 
        Create your personal account to set your search criteria and receive instant updates on new listings. 
        We offer a user-friendly search interface and advanced filtering options to specify your needs.
    </p>

    <form action="tr.php" method="post" class="in">
        <input type="submit" value="the property owner" name='owner'>
        <input type="submit" value="the tenant" class="in1" name='tenant'>
    </form>
   
    </main>

    </div>
    <footer class="site-footer">
        <section>
            <div class="divf">
                <p class="cop">&copy; 2024</p>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">The Property Owner</a></li>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Cookie Policy</a></li>
                    <li><a href="#">Copyright Policy</a></li>
                    <li><a href="#">The Tenant</a></li>
                    <li><a href="#">Brand Policy</a></li>
                    <li><a href="#">Visitor Controls</a></li>
                </ul>
                <select id="language" name="language" onchange="changeLanguage()">
                    <option value="en">English</option>
                    <option value="fr">Français</option>
                    <option value="ar">العربية</option>
                </select>
            </div>
        </section>
    </footer>

<script>
        function changeLanguage() {
            var languageSelect = document.getElementById("language");
            var selectedLanguage = languageSelect.value;

            // تحديث لغة الصفحة
            document.documentElement.lang = selectedLanguage;

            // حفظ قيمة اللغة في Local Storage
            localStorage.setItem("selectedLanguage", selectedLanguage);
        }

        // استرجاع قيمة اللغة عند تحميل الصفحة
        document.addEventListener("DOMContentLoaded", function () {
            var savedLanguage = localStorage.getItem("selectedLanguage");

            if (savedLanguage) {
                // استرجاع لغة الصفحة
                document.documentElement.lang = savedLanguage;

                // تحديث قيمة اللغة في القائمة المنسدلة
                document.getElementById("language").value = savedLanguage;
            }
        });
    </script>
</body>

</html>