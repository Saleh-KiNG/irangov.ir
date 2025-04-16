<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سامانه ثبت نام</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { direction: rtl; background: #121212; color: white; }
    </style>
</head>
<body class="flex items-center justify-center h-screen">
    <div class="bg-gray-900 p-6 rounded-xl shadow-lg w-96 text-center">
        <img src="logo-yellow-clean.png" alt="لوگو" class="mx-auto mb-4 w-16">
        <h2 class="text-lg font-bold text-green-500">سامانه مرکزی پیگیری شکایات قوه قضائیه ج.ا ایران</h2>
        <p class="text-sm text-gray-400 mt-2">اطلاعات خود را برای ثبت نام وارد کنید.</p>
        
        <div class="mt-4 space-y-3">
            <div class="flex items-center bg-gray-800 border border-gray-700 rounded-md p-2">
                <span class="text-green-400 ml-2">👤</span>
                <input type="text" placeholder="نام و نام خانوادگی" class="bg-transparent text-white w-full outline-none">
            </div>
            
            <div class="flex items-center bg-gray-800 border border-gray-700 rounded-md p-2">
                <span class="text-green-400 ml-2">💳</span>
                <input type="text" placeholder="کد ملی" class="bg-transparent text-white w-full outline-none">
            </div>

            <div class="flex items-center bg-gray-800 border border-gray-700 rounded-md p-2">
                <span class="text-green-400 ml-2">📞</span>
                <input type="text" placeholder="شماره همراه" class="bg-transparent text-white w-full outline-none">
            </div>
        </div>

        <button class="mt-4 bg-green-600 hover:bg-green-700 text-white py-2 px-6 rounded-md w-full">ثبت نام</button>
        <p class="text-xs text-gray-500 mt-4">شماره همراه وارد شده باید با کد ملی مطابقت داشته باشد.</p>
        <p class="text-xs text-gray-500 mt-2">سازمان قوه قضائیه © ۱۴۰۴ <br> <span class="text-green-400">تمامی حقوق محفوظ است</span></p>
    </div>
</body>
</html>
