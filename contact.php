<?php include 'includes/header.php'; ?>

<section class="page-content">
    <div class="container">
        <h1>تماس با ما</h1>
        
        <div class="contact-info">
            <h2>اطلاعات تماس</h2>
            <p><strong>📞 تلفن:</strong> +۹۸-۹۹۹-۱۲۳۴-۵۶۷</p>
            <p><strong>📧 ایمیل:</strong> info@ahurania.ah</p>
            <p><strong>📍 آدرس:</strong> کاخ ریاست‌جمهوری، خیابان چرخ آهورا، آهوراگاد، آهورانیا</p>
            
            <h2>ساعات کاری</h2>
            <p>شنبه تا چهارشنبه: ۸:۰۰ تا ۱۶:۰۰</p>
            <p>پنجشنبه: ۸:۰۰ تا ۱۲:۰۰</p>
        </div>
        
        <div class="contact-form">
            <h2>ارسال پیام</h2>
            <form action="#" method="POST">
                <div>
                    <label for="name">نام و نام خانوادگی:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div>
                    <label for="email">ایمیل:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div>
                    <label for="message">پیام:</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit">ارسال پیام</button>
            </form>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>