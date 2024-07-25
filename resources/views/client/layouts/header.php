<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PestnClean</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script src="../../../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="../../../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/resources/css/reset.css">
    <link rel="stylesheet" href="/resources/css/styles.css">
    <link rel="stylesheet" href="/resources/css/components/header.css">
    <link rel="stylesheet" href="/resources/css/components/footer.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light px-5 py-3 navbar-background-color">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <div class="header-logo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="37" viewBox="0 0 34 37" fill="none">
                        <path d="M33.6346 27.75V9.25L17.0664 0L0.5 9.25V27.75L17.0664 37L33.6346 27.75Z"
                            fill="#005CA9" />
                        <path d="M17.0664 0.144653L17.0647 0.146376L17.0664 0.148098V0.144653Z" fill="white" />
                        <path d="M17.0664 35.8321V35.8286L17.0647 35.8303L17.0664 35.8321Z" fill="white" />
                        <path d="M17.0613 35.8321L17.0647 35.8303L17.0613 35.8286V35.8321Z" fill="white" />
                        <path d="M17.0613 0.144653V0.148098L17.0647 0.146376L17.0613 0.144653Z" fill="white" />
                        <path
                            d="M29.3877 8.55924C27.4334 7.44131 25.4584 6.32339 23.4592 5.20547C21.3151 4.00658 19.1847 2.83182 17.0664 1.67944C12.1548 4.61636 7.24325 7.555 2.33167 10.4936C2.33167 15.9971 2.33167 21.5006 2.33167 27.0041C7.24497 29.7102 12.1566 32.418 17.0699 35.1241C21.9832 32.418 26.8948 29.7102 31.8081 27.0041V9.92693C31.0018 9.47046 30.1956 9.01399 29.3911 8.55924H29.3877ZM4.73653 11.9251C8.19449 9.96483 11.6507 8.00458 15.1087 6.04434V13.9301C11.6507 15.8145 8.19449 17.6973 4.73653 19.5817V11.9251ZM4.75034 25.6364L4.73653 22.2689C6.85826 21.1062 8.97827 19.9435 11.1 18.779C11.1069 22.1862 11.1138 25.5916 11.1207 28.9988C8.99726 27.8774 6.8738 26.7578 4.75034 25.6364ZM17.0664 32.1373C15.8838 31.5137 14.7013 30.8884 13.5187 30.2649C13.5239 28.5131 13.5273 26.763 13.5325 25.0111C15.8821 25.006 18.2334 25.0008 20.5831 24.9939C20.5934 26.7544 20.6055 28.5148 20.6159 30.2735C19.4333 30.8936 18.2507 31.5154 17.0681 32.1355L17.0664 32.1373ZM20.5831 22.6289C18.2317 22.6289 15.8804 22.6289 13.529 22.6289C13.529 20.9339 13.5308 19.2389 13.5325 17.544V17.5095C14.7082 16.7568 15.8838 16.0023 17.0612 15.2496C18.2507 15.9145 19.4402 16.5811 20.6297 17.246C20.6141 19.0408 20.5986 20.834 20.5831 22.6289ZM29.341 25.6416C27.2245 26.7612 25.1062 27.8792 22.9897 28.9988V18.6274C25.1097 19.8074 27.2297 20.9873 29.3514 22.1672C29.348 23.3265 29.3445 24.4841 29.341 25.6433V25.6416ZM29.36 19.1924C26.2215 17.339 23.0829 15.4855 19.9443 13.6338C19.9478 11.2343 19.9512 8.83484 19.9547 6.43536C23.0967 8.22162 26.2387 10.0079 29.3808 11.7924C29.3738 14.2591 29.3669 16.7258 29.36 19.1924ZM29.3808 11.3394C26.1231 9.48941 22.8636 7.63941 19.6059 5.78768V13.9301C22.8567 15.8214 26.1075 17.7128 29.3583 19.6041C29.3566 20.381 29.3531 21.1578 29.3514 21.9347C25.379 19.6868 21.4048 17.4389 17.4324 15.191C17.429 10.8278 17.4272 6.46464 17.4238 2.10319C21.4117 4.33559 25.3997 6.56799 29.3894 8.80039C29.3859 9.64788 29.3842 10.4936 29.3808 11.3411V11.3394Z"
                            fill="white" />
                    </svg>
                    <div class="header-logo-company-name ms-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="143" height="20" viewBox="0 0 143 20"
                            fill="none">
                            <path
                                d="M8.75308 1.15747C10.1169 1.15747 11.2909 1.45375 12.2784 2.04285C13.2659 2.63368 13.9961 3.40365 14.4709 4.35621C14.9456 5.30705 15.1839 6.37847 15.1839 7.56874C15.1839 9.41702 14.6142 10.9363 13.4748 12.1266C12.3353 13.3168 10.7436 13.9111 8.69956 13.9111H5.42978V19.6196H0.989502V1.15747H8.75308ZM10.6763 7.56874C10.6763 6.62134 10.4139 5.88927 9.88905 5.37079C9.36422 4.8523 8.64087 4.59392 7.71552 4.59392H5.41597V10.5453H7.20623C9.5196 10.5453 10.6763 9.5531 10.6763 7.57046V7.56874Z"
                                fill="#005CA9" />
                            <path
                                d="M23.417 19.89C21.3454 19.89 19.6932 19.2888 18.4588 18.0848C17.2262 16.8807 16.6082 15.1564 16.6082 12.912V11.7613C16.6082 9.58922 17.2245 7.90114 18.4588 6.70225C19.6915 5.50337 21.2919 4.90393 23.2548 4.90393C25.2177 4.90393 26.8646 5.52576 28.0576 6.77116C29.2505 8.01655 29.8478 9.70118 29.8478 11.8302V13.2772H20.8205V13.7646C20.8205 14.6672 21.0657 15.3821 21.5543 15.9092C22.0428 16.4363 22.6678 16.6998 23.4309 16.6998C24.0765 16.6998 24.6169 16.55 25.0519 16.2468C25.487 15.9454 25.7494 15.5285 25.8392 14.9962H29.7546C29.7011 15.5922 29.5371 16.1693 29.2643 16.7274C28.9898 17.2872 28.61 17.8074 28.1197 18.2897C27.6312 18.772 26.9803 19.1596 26.1689 19.4524C25.3575 19.7453 24.4408 19.8917 23.417 19.8917V19.89ZM20.8205 10.7864H25.7183V10.7726C25.7183 9.96129 25.4956 9.29639 25.0519 8.77791C24.6082 8.25942 24.023 8.00104 23.2962 8.00104C22.5694 8.00104 21.9634 8.26287 21.5059 8.7848C21.0484 9.30845 20.8188 9.9699 20.8188 10.7726V10.7864H20.8205Z"
                                fill="#005CA9" />
                            <path
                                d="M31.9471 9.55648C31.9471 8.9157 32.0541 8.3352 32.2699 7.81155C32.4857 7.28962 32.7792 6.85038 33.1504 6.49381C33.5216 6.13725 33.967 5.83753 34.4814 5.59465C34.9976 5.35178 35.5466 5.17435 36.1301 5.06756C36.7137 4.95904 37.3317 4.90564 37.986 4.90564C39.7349 4.90564 41.128 5.29838 42.1639 6.08213C43.1997 6.86588 43.7176 7.96314 43.7176 9.36872H39.9507C39.8971 8.90881 39.7055 8.52468 39.3792 8.21807C39.0512 7.91146 38.5609 7.75815 37.9066 7.75815C37.3231 7.75815 36.8639 7.88734 36.5272 8.144C36.1906 8.40066 36.0231 8.74172 36.0231 9.16546C36.0231 9.34633 36.0611 9.50997 36.1371 9.65983C36.213 9.80797 36.3373 9.93716 36.5082 10.0457C36.6791 10.1542 36.8414 10.2455 36.9985 10.323C37.1556 10.4005 37.3766 10.4711 37.6649 10.54C37.9515 10.6072 38.1828 10.6606 38.3572 10.6951C38.5316 10.7312 38.7871 10.776 39.1237 10.8312C39.4604 10.8863 39.6951 10.9259 39.8298 10.9535C41.2472 11.2049 42.3279 11.6459 43.072 12.2712C43.816 12.8982 44.1889 13.8197 44.1889 15.0376C44.1889 16.5517 43.6313 17.7402 42.5143 18.6015C41.3974 19.4628 39.8298 19.8934 37.8117 19.8934C35.7935 19.8934 34.3278 19.4852 33.2505 18.6687C32.1733 17.8522 31.6364 16.7825 31.6364 15.4562H35.8211C35.866 15.9247 36.0835 16.3036 36.4737 16.593C36.8639 16.8824 37.3766 17.0254 38.0154 17.0254C38.6541 17.0254 39.1582 16.8876 39.5087 16.6137C39.8591 16.3398 40.0335 15.9987 40.0335 15.5922C40.0335 15.4217 40.0024 15.265 39.9386 15.1254C39.8764 14.9859 39.7711 14.8636 39.6226 14.7602C39.4742 14.6569 39.3326 14.569 39.1997 14.4967C39.065 14.4244 38.8682 14.3572 38.6075 14.2934C38.3468 14.2297 38.1345 14.1798 37.9688 14.1453C37.803 14.1091 37.5561 14.0626 37.2281 14.0023C36.9001 13.9438 36.6567 13.8973 36.4944 13.8611C35.8211 13.7164 35.2272 13.5407 34.7111 13.334C34.1949 13.1273 33.7201 12.8586 33.2851 12.5296C32.85 12.2006 32.5185 11.7854 32.2889 11.2859C32.0593 10.7846 31.9471 10.211 31.9471 9.56165V9.55648Z"
                                fill="#005CA9" />
                            <path
                                d="M47.716 5.17445V1.82068H51.8731V5.17445H54.6181V8.46104H51.8731V14.7362C51.8731 15.3581 52.0285 15.7973 52.3375 16.0557C52.6466 16.3123 53.1386 16.4415 53.8102 16.4415C54.1779 16.4415 54.461 16.4329 54.6578 16.414V19.5386C54.1727 19.6196 53.546 19.6609 52.7743 19.6609C50.9271 19.6609 49.6047 19.344 48.8053 18.7067C48.006 18.0711 47.6072 17.0048 47.6072 15.5079V8.46104H45.5079V5.17445H47.7143H47.716Z"
                                fill="#005CA9" />
                            <path
                                d="M57.3751 19.6196V5.17444H61.5599V7.4189H61.7619C62.0036 6.78845 62.4801 6.22001 63.1879 5.71531C63.8957 5.21061 64.8072 4.9574 65.919 4.9574C67.3986 4.9574 68.5742 5.41731 69.4443 6.33715C70.3144 7.25698 70.7495 8.57816 70.7495 10.3007V19.6196H66.4439V11.3153C66.4439 10.3506 66.2177 9.6513 65.7637 9.21894C65.3096 8.78659 64.752 8.56955 64.0891 8.56955C63.3536 8.56955 62.7684 8.81932 62.3333 9.32057C61.8983 9.82183 61.6807 10.504 61.6807 11.3687V19.6196H57.3751Z"
                                fill="#868E96" />
                            <path
                                d="M77.7586 9.43425V11.4083C77.7586 12.9689 78.0607 14.1678 78.6667 15.0066C79.2727 15.8455 80.1307 16.2641 81.2425 16.2641C82.23 16.2641 83.0103 15.9489 83.5835 15.3167C84.1566 14.6863 84.4484 13.8732 84.457 12.8828H88.7091V13.4236C88.7091 15.3632 88.0065 16.9359 86.6029 18.1434C85.1994 19.3526 83.3987 19.9555 81.201 19.9555C78.6719 19.9555 76.709 19.1907 75.3158 17.6628C73.9208 16.1349 73.2234 14.0403 73.2234 11.3807V9.43253C73.2234 6.76433 73.9208 4.66284 75.3158 3.12978C76.7107 1.59673 78.6719 0.8302 81.201 0.8302C82.646 0.8302 83.9374 1.10236 85.0768 1.6484C86.2162 2.19445 87.1053 2.97475 87.7475 3.98932C88.3897 5.0039 88.7091 6.16488 88.7091 7.47229V7.99938H84.457C84.4484 6.97103 84.1566 6.1356 83.5835 5.49137C83.0103 4.84715 82.23 4.52503 81.2425 4.52503C80.1307 4.52503 79.2709 4.94705 78.6667 5.78937C78.0607 6.63341 77.7586 7.8478 77.7586 9.43425Z"
                                fill="#005CA9" />
                            <path d="M91.347 19.6196V0.182495H95.6647V19.6196H91.347Z" fill="#005CA9" />
                            <path
                                d="M105.138 19.89C103.066 19.89 101.414 19.2888 100.179 18.0848C98.9467 16.8807 98.3286 15.1564 98.3286 12.912V11.7613C98.3286 9.58922 98.9449 7.90114 100.179 6.70225C101.412 5.50337 103.012 4.90393 104.975 4.90393C106.938 4.90393 108.585 5.52576 109.778 6.77116C110.971 8.01655 111.568 9.70118 111.568 11.8302V13.2772H102.541V13.7646C102.541 14.6672 102.786 15.3821 103.275 15.9092C103.763 16.4363 104.388 16.6998 105.151 16.6998C105.797 16.6998 106.337 16.55 106.772 16.2468C107.207 15.9454 107.47 15.5285 107.56 14.9962H111.475C111.422 15.5922 111.258 16.1693 110.985 16.7274C110.71 17.2872 110.33 17.8074 109.84 18.2897C109.352 18.772 108.701 19.1596 107.889 19.4524C107.078 19.7453 106.161 19.8917 105.138 19.8917V19.89ZM102.541 10.7864H107.439V10.7726C107.439 9.96129 107.216 9.29639 106.772 8.77791C106.329 8.25942 105.743 8.00104 105.017 8.00104C104.29 8.00104 103.684 8.26287 103.226 8.7848C102.769 9.30845 102.539 9.9699 102.539 10.7726V10.7864H102.541Z"
                                fill="#005CA9" />
                            <path
                                d="M118.148 19.8349C116.722 19.8349 115.574 19.4422 114.703 18.6584C113.833 17.8747 113.398 16.805 113.398 15.4528C113.398 14.1006 113.847 13.0654 114.743 12.2954C115.639 11.5237 116.913 11.1379 118.564 11.1379H121.887V9.93381C121.887 9.34815 121.716 8.89684 121.376 8.58162C121.036 8.2664 120.559 8.10792 119.95 8.10792C119.341 8.10792 118.871 8.25951 118.517 8.56095C118.163 8.86411 117.972 9.26719 117.946 9.77189H113.923C113.94 9.14144 114.058 8.55406 114.274 8.01318C114.489 7.47231 114.821 6.96588 115.27 6.49219C115.719 6.01849 116.347 5.6447 117.153 5.3691C117.961 5.09349 118.911 4.95569 120.005 4.95569C120.893 4.95569 121.701 5.05215 122.427 5.2468C123.154 5.44144 123.798 5.73427 124.357 6.12529C124.919 6.51802 125.355 7.0434 125.67 7.70141C125.984 8.35941 126.141 9.12249 126.141 9.98721V19.6179H122.091V17.8867H121.903C121.633 18.4466 121.184 18.9099 120.558 19.2803C119.931 19.6506 119.126 19.8349 118.149 19.8349H118.148ZM119.627 16.8188C120.256 16.8188 120.789 16.6413 121.228 16.2848C121.666 15.9282 121.887 15.4717 121.887 14.9119V13.4908H119.707C119.052 13.4908 118.545 13.6373 118.187 13.9301C117.828 14.2229 117.649 14.6174 117.649 15.1135C117.649 15.6543 117.842 16.0746 118.227 16.3709C118.612 16.6689 119.078 16.817 119.627 16.817V16.8188Z"
                                fill="#005CA9" />
                            <path
                                d="M129.126 19.6196V5.17444H133.311V7.4189H133.512C133.754 6.78845 134.231 6.22001 134.938 5.71531C135.646 5.21061 136.558 4.9574 137.67 4.9574C139.149 4.9574 140.325 5.41731 141.195 6.33715C142.065 7.25698 142.5 8.57816 142.5 10.3007V19.6196H138.194V11.3153C138.194 10.3506 137.968 9.6513 137.514 9.21894C137.06 8.78659 136.503 8.56955 135.84 8.56955C135.104 8.56955 134.519 8.81932 134.084 9.32057C133.649 9.82183 133.431 10.504 133.431 11.3687V19.6196H129.126Z"
                                fill="#005CA9" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="115" height="9" viewBox="0 0 115 9" fill="none">
                            <path
                                d="M1.88816 1.10219H4.37071C4.86101 1.10219 5.227 1.24171 5.4687 1.51904C5.71039 1.79809 5.77772 2.18738 5.66896 2.69036C5.57919 3.12272 5.36511 3.49995 5.02847 3.82034C4.69182 4.14073 4.24469 4.30093 3.69052 4.30093H1.95549L1.46347 6.6453H0.715942L1.88644 1.10046L1.88816 1.10219ZM4.64003 1.86871C4.48983 1.7912 4.27058 1.75158 3.98228 1.75158H2.49585L2.09015 3.66876H3.57657C3.91149 3.66876 4.1998 3.59641 4.43804 3.45344C4.67628 3.31047 4.83511 3.05898 4.9128 2.69553C4.99739 2.28901 4.90589 2.01168 4.6383 1.86699L4.64003 1.86871Z"
                                fill="#868E96" />
                            <path
                                d="M9.5171 3.23813C9.61033 3.44139 9.65003 3.67909 9.63794 3.95126C9.63967 4.13729 9.59824 4.43356 9.51019 4.8418H6.56324C6.48728 5.25177 6.5149 5.58077 6.64438 5.82881C6.77386 6.07686 7.02591 6.20088 7.40399 6.20088C7.75618 6.20088 8.06175 6.08375 8.32071 5.84948C8.4709 5.7134 8.59002 5.55665 8.67634 5.37751H9.341C9.29094 5.52565 9.19772 5.69101 9.06133 5.8736C8.92495 6.05619 8.78338 6.20433 8.63491 6.32146C8.38631 6.52299 8.10491 6.65907 7.78725 6.7297C7.61461 6.76932 7.42472 6.78999 7.21927 6.78999C6.71862 6.78999 6.33363 6.6074 6.06259 6.2405C5.79155 5.87532 5.72767 5.36201 5.86751 4.70228C6.00562 4.05288 6.2922 3.52579 6.72725 3.12099C7.1623 2.7162 7.66295 2.51294 8.22921 2.51294C8.51406 2.51294 8.77648 2.58012 9.01817 2.71448C9.25814 2.84883 9.42387 3.02281 9.5171 3.23813ZM8.9284 4.30265C8.96293 4.0081 8.94911 3.77383 8.88696 3.59641C8.7713 3.26913 8.4968 3.10549 8.0652 3.10549C7.75445 3.10549 7.47133 3.21745 7.21237 3.44311C6.95514 3.66876 6.7825 3.9547 6.69445 4.30265H8.9284Z"
                                fill="#868E96" />
                            <path
                                d="M10.6271 5.37922C10.5995 5.60487 10.6202 5.77885 10.6875 5.89943C10.8101 6.11819 11.0811 6.22843 11.5024 6.22843C11.7527 6.22843 11.984 6.17331 12.1981 6.06479C12.4122 5.95455 12.5434 5.78574 12.59 5.55664C12.628 5.38266 12.5779 5.25003 12.4433 5.16046C12.3587 5.10534 12.1791 5.0416 11.9064 4.96754L11.3988 4.83146C11.0742 4.74533 10.8412 4.65059 10.6996 4.54552C10.4475 4.3612 10.356 4.10799 10.4251 3.78243C10.5045 3.40003 10.7065 3.08997 11.0311 2.85399C11.3556 2.618 11.7492 2.49915 12.2119 2.49915C12.8179 2.49915 13.2167 2.67829 13.41 3.03485C13.5292 3.2605 13.5602 3.5051 13.4998 3.76693H12.861C12.8818 3.61362 12.8559 3.4741 12.7851 3.34836C12.6677 3.16921 12.4174 3.07964 12.0341 3.07964C11.7786 3.07964 11.5749 3.12959 11.4247 3.22605C11.2728 3.32424 11.1795 3.45343 11.145 3.61535C11.107 3.79104 11.164 3.93229 11.3142 4.03737C11.4022 4.1011 11.5386 4.15622 11.7234 4.20273L12.148 4.31297C12.609 4.43183 12.9094 4.54551 13.0527 4.65576C13.2771 4.82973 13.3496 5.10189 13.2702 5.47396C13.1942 5.83397 12.994 6.14403 12.6677 6.40585C12.3414 6.66768 11.8994 6.79859 11.3435 6.79859C10.7462 6.79859 10.3509 6.66251 10.1592 6.38862C9.96761 6.11474 9.90546 5.77712 9.97279 5.37577H10.6219L10.6271 5.37922Z"
                                fill="#868E96" />
                            <path
                                d="M15.0312 1.47595H15.7149L15.4749 2.60421H16.1171L16.0015 3.15887H15.3592L14.7999 5.79779C14.7705 5.93904 14.7964 6.03378 14.8828 6.08028C14.9294 6.10785 15.0157 6.12162 15.1383 6.12162C15.1711 6.12162 15.2056 6.12162 15.2436 6.1199C15.2815 6.11818 15.3264 6.11473 15.3782 6.11129L15.266 6.647C15.1831 6.66939 15.0986 6.68661 15.0122 6.69695C14.9259 6.70728 14.8344 6.71245 14.736 6.71245C14.4201 6.71245 14.2233 6.63149 14.1439 6.46958C14.0644 6.30766 14.0524 6.09579 14.1076 5.83741L14.6739 3.16059H14.13L14.2474 2.60593H14.7913L15.0312 1.47768V1.47595Z"
                                fill="#868E96" />
                            <path
                                d="M23.5769 2.76614H22.8483C22.8414 2.40785 22.7361 2.12363 22.5324 1.91348C22.3287 1.70334 22.0059 1.59826 21.5604 1.59826C21.0166 1.59826 20.5384 1.79118 20.1241 2.17359C19.7098 2.55771 19.418 3.14682 19.2505 3.93918C19.1124 4.58858 19.1521 5.11567 19.3697 5.52047C19.5855 5.92526 19.9929 6.1268 20.5919 6.1268C21.1427 6.1268 21.6071 5.91493 21.9851 5.48946C22.1837 5.26553 22.358 4.97098 22.5117 4.6058H23.2402C23.052 5.18974 22.7344 5.67894 22.2873 6.0734C21.7469 6.54882 21.1047 6.78653 20.3623 6.78653C19.7218 6.78653 19.2246 6.59188 18.8725 6.20087C18.4098 5.68583 18.2924 4.8883 18.5203 3.81171C18.6929 2.99351 19.0503 2.32345 19.5906 1.7998C20.1759 1.23136 20.8785 0.947144 21.6968 0.947144C22.396 0.947144 22.8984 1.13145 23.2057 1.5018C23.513 1.87214 23.639 2.29244 23.5821 2.76269L23.5769 2.76614Z"
                                fill="#868E96" />
                            <path
                                d="M27.5458 4.54034C27.4077 5.19145 27.1366 5.7306 26.7309 6.15607C26.3252 6.58154 25.7918 6.79341 25.1271 6.79341C24.5747 6.79341 24.1741 6.60565 23.929 6.22842C23.6838 5.85118 23.6269 5.34648 23.7598 4.71259C23.9048 4.03219 24.1914 3.49131 24.6195 3.08996C25.0477 2.68689 25.5501 2.48535 26.1284 2.48535C26.6463 2.48535 27.0469 2.65933 27.3317 3.00556C27.6148 3.35351 27.6873 3.86338 27.5441 4.53861L27.5458 4.54034ZM26.8362 4.55928C26.9156 4.18205 26.9208 3.87544 26.8518 3.63773C26.7396 3.26566 26.4495 3.07963 25.9851 3.07963C25.5725 3.07963 25.2393 3.2381 24.9838 3.55505C24.73 3.87199 24.5557 4.2544 24.4607 4.70225C24.3709 5.13289 24.3882 5.49117 24.516 5.77711C24.642 6.06478 24.9096 6.20775 25.317 6.20775C25.7641 6.20775 26.1077 6.03722 26.3477 5.69615C26.5859 5.35509 26.7499 4.97613 26.838 4.55756L26.8362 4.55928Z"
                                fill="#868E96" />
                            <path
                                d="M28.7577 2.60423H29.4L29.2791 3.17784C29.5191 2.94185 29.7573 2.77132 29.9904 2.66797C30.2252 2.56461 30.4721 2.51294 30.7327 2.51294C31.3042 2.51294 31.646 2.71275 31.7617 3.11238C31.8273 3.33114 31.8169 3.64464 31.7323 4.05288L31.1833 6.64529H30.4962L31.0331 4.09767C31.0849 3.85135 31.0918 3.65153 31.0521 3.50167C30.9848 3.25018 30.7932 3.12444 30.4772 3.12444C30.3167 3.12444 30.182 3.14166 30.0715 3.17439C29.873 3.22951 29.6865 3.33976 29.5122 3.50684C29.3723 3.63948 29.2705 3.77728 29.2066 3.92025C29.1427 4.06322 29.084 4.26476 29.0288 4.53003L28.5817 6.64702H27.9049L28.7577 2.60423Z"
                                fill="#868E96" />
                            <path
                                d="M33.4104 1.47595H34.094L33.8541 2.60421H34.4963L34.3806 3.15887H33.7384L33.179 5.79779C33.1497 5.93904 33.1756 6.03378 33.2619 6.08028C33.3085 6.10785 33.3948 6.12162 33.5174 6.12162C33.5502 6.12162 33.5847 6.12162 33.6227 6.1199C33.6607 6.11818 33.7056 6.11473 33.7574 6.11129L33.6452 6.647C33.5623 6.66939 33.4777 6.68661 33.3914 6.69695C33.3051 6.70728 33.2136 6.71245 33.1152 6.71245C32.7992 6.71245 32.6024 6.63149 32.523 6.46958C32.4436 6.30766 32.4315 6.09579 32.4868 5.83741L33.053 3.16059H32.5092L32.6266 2.60593H33.1704L33.4104 1.47768V1.47595Z"
                                fill="#868E96" />
                            <path
                                d="M35.1902 2.60422H35.8325L35.6857 3.30357C35.7651 3.16749 35.9291 3.00213 36.176 2.80748C36.4229 2.61283 36.6801 2.51465 36.9477 2.51465C36.9598 2.51465 36.9822 2.51465 37.0116 2.51809C37.0409 2.51982 37.091 2.52498 37.1618 2.5336L37.0116 3.25017C36.9719 3.24156 36.9356 3.23811 36.9028 3.23467C36.87 3.23295 36.8338 3.23122 36.7941 3.23122C36.454 3.23122 36.1691 3.34146 35.9395 3.56195C35.7099 3.78243 35.5649 4.03565 35.5027 4.32331L35.0141 6.64873H34.3374L35.1902 2.60594V2.60422Z"
                                fill="#868E96" />
                            <path
                                d="M40.7958 4.54034C40.6577 5.19145 40.3866 5.7306 39.9809 6.15607C39.5752 6.58154 39.0418 6.79341 38.3771 6.79341C37.8247 6.79341 37.4241 6.60565 37.179 6.22842C36.9338 5.85118 36.8769 5.34648 37.0098 4.71259C37.1548 4.03219 37.4414 3.49131 37.8696 3.08996C38.2977 2.68689 38.8001 2.48535 39.3784 2.48535C39.8963 2.48535 40.2969 2.65933 40.5817 3.00556C40.8648 3.35351 40.9374 3.86338 40.7941 4.53861L40.7958 4.54034ZM40.0862 4.55928C40.1656 4.18205 40.1708 3.87544 40.1018 3.63773C39.9896 3.26566 39.6995 3.07963 39.2351 3.07963C38.8225 3.07963 38.4893 3.2381 38.2338 3.55505C37.98 3.87199 37.8057 4.2544 37.7107 4.70225C37.6209 5.13289 37.6382 5.49117 37.766 5.77711C37.892 6.06478 38.1596 6.20775 38.567 6.20775C39.0141 6.20775 39.3577 6.03722 39.5977 5.69615C39.8359 5.35509 39.9999 4.97613 40.088 4.55756L40.0862 4.55928Z"
                                fill="#868E96" />
                            <path d="M42.3462 1.10217H43.0229L41.8507 6.64701H41.174L42.3462 1.10217Z" fill="#868E96" />
                            <path d="M45.3501 4.14417H47.2353L47.0886 4.84351H45.2034L45.3501 4.14417Z"
                                fill="#0C0D0E" />
                            <path
                                d="M55.1974 2.76614H54.4688C54.4619 2.40785 54.3566 2.12363 54.1529 1.91348C53.9492 1.70334 53.6263 1.59826 53.1809 1.59826C52.6371 1.59826 52.1589 1.79118 51.7446 2.17359C51.3302 2.55771 51.0385 3.14682 50.871 3.93918C50.7329 4.58858 50.7726 5.11567 50.9901 5.52047C51.2059 5.92526 51.6134 6.1268 52.2124 6.1268C52.7631 6.1268 53.2275 5.91493 53.6056 5.48946C53.8042 5.26553 53.9785 4.97098 54.1322 4.6058H54.8607C54.6725 5.18974 54.3549 5.67894 53.9077 6.0734C53.3674 6.54882 52.7252 6.78653 51.9828 6.78653C51.3423 6.78653 50.8451 6.59188 50.4929 6.20087C50.0303 5.68583 49.9129 4.8883 50.1408 3.81171C50.3134 2.99351 50.6708 2.32345 51.2111 1.7998C51.7964 1.23136 52.499 0.947144 53.3173 0.947144C54.0165 0.947144 54.5189 1.13145 54.8262 1.5018C55.1335 1.87214 55.2595 2.29244 55.2025 2.76269L55.1974 2.76614Z"
                                fill="#005CA9" />
                            <path d="M56.4404 1.10217H57.1172L55.9449 6.64701H55.2682L56.4404 1.10217Z"
                                fill="#005CA9" />
                            <path
                                d="M60.7909 3.23813C60.8841 3.44139 60.9238 3.67909 60.9117 3.95126C60.9135 4.13729 60.872 4.43356 60.784 4.8418H57.837C57.7611 5.25177 57.7887 5.58077 57.9182 5.82881C58.0477 6.07686 58.2997 6.20088 58.6778 6.20088C59.03 6.20088 59.3355 6.08375 59.5945 5.84948C59.7447 5.7134 59.8638 5.55665 59.9501 5.37751H60.6148C60.5647 5.52565 60.4715 5.69101 60.3351 5.8736C60.1988 6.05619 60.0572 6.20433 59.9087 6.32146C59.6601 6.52299 59.3787 6.65907 59.0611 6.7297C58.8884 6.76932 58.6985 6.78999 58.4931 6.78999C57.9924 6.78999 57.6074 6.6074 57.3364 6.2405C57.0653 5.87532 57.0015 5.36201 57.1413 4.70228C57.2794 4.05288 57.566 3.52579 58.0011 3.12099C58.4361 2.7162 58.9368 2.51294 59.503 2.51294C59.7879 2.51294 60.0503 2.58012 60.292 2.71448C60.5319 2.84883 60.6977 3.02281 60.7909 3.23813ZM60.2022 4.30265C60.2367 4.0081 60.2229 3.77383 60.1608 3.59641C60.0451 3.26913 59.7706 3.10549 59.339 3.10549C59.0283 3.10549 58.7451 3.21745 58.4862 3.44311C58.2289 3.66876 58.0563 3.9547 57.9683 4.30265H60.2022Z"
                                fill="#005CA9" />
                            <path
                                d="M63.9036 4.19751C64.0641 4.17684 64.1833 4.11138 64.261 4.00114C64.3041 3.94085 64.3352 3.85472 64.3576 3.74104C64.4077 3.51022 64.3611 3.34141 64.2178 3.23633C64.0745 3.13126 63.8518 3.07958 63.5462 3.07958C63.194 3.07958 62.923 3.17605 62.7348 3.36725C62.6295 3.47232 62.5432 3.63079 62.4759 3.83922H61.8457C61.9631 3.34141 62.1979 2.99346 62.5484 2.79881C62.8988 2.60417 63.2786 2.50598 63.6861 2.50598C64.1591 2.50598 64.5234 2.59727 64.7789 2.77814C65.0344 2.95901 65.1224 3.2415 65.0413 3.6239L64.5493 5.95277C64.5337 6.02339 64.5355 6.08024 64.5544 6.1233C64.5734 6.16636 64.6287 6.18703 64.7219 6.18703C64.7512 6.18703 64.7858 6.18703 64.8255 6.18187C64.8635 6.17842 64.9066 6.17325 64.9515 6.16464L64.8427 6.6659C64.7323 6.6969 64.6494 6.71585 64.5924 6.72274C64.5354 6.72963 64.4612 6.73308 64.3645 6.73308C64.1315 6.73308 63.9796 6.6504 63.9105 6.48503C63.8725 6.39718 63.8604 6.27316 63.8725 6.11124C63.6947 6.29211 63.4634 6.44886 63.1785 6.58322C62.8937 6.71585 62.595 6.78303 62.2842 6.78303C61.9113 6.78303 61.6299 6.66934 61.4418 6.44197C61.2536 6.21459 61.1949 5.92866 61.2674 5.58759C61.3468 5.21208 61.5264 4.92269 61.8026 4.71599C62.0788 4.50929 62.412 4.38182 62.7987 4.33531L63.9019 4.19923L63.9036 4.19751ZM62.5639 6.20598C62.8022 6.20598 63.0438 6.15086 63.2924 6.04062C63.7051 5.85631 63.9571 5.55659 64.0469 5.13801L64.1591 4.59025C64.0659 4.64364 63.9519 4.68671 63.8138 4.72288C63.6757 4.75905 63.5428 4.78317 63.4167 4.79867L62.9955 4.85207C62.7435 4.8848 62.5466 4.93647 62.4103 5.0071C62.1772 5.12595 62.0339 5.31371 61.9787 5.57381C61.9355 5.77018 61.9752 5.92521 62.0926 6.03717C62.2117 6.15086 62.3688 6.2077 62.5639 6.2077V6.20598Z"
                                fill="#005CA9" />
                            <path
                                d="M66.3637 2.60423H67.0059L66.8851 3.17784C67.125 2.94185 67.3633 2.77132 67.5964 2.66797C67.8311 2.56461 68.078 2.51294 68.3387 2.51294C68.9101 2.51294 69.252 2.71275 69.3676 3.11238C69.4332 3.33114 69.4229 3.64464 69.3383 4.05288L68.7893 6.64529H68.1022L68.6391 4.09767C68.6909 3.85135 68.6978 3.65153 68.6581 3.50167C68.5907 3.25018 68.3991 3.12444 68.0832 3.12444C67.9226 3.12444 67.788 3.14166 67.6775 3.17439C67.479 3.22951 67.2925 3.33976 67.1181 3.50684C66.9783 3.63948 66.8764 3.77728 66.8126 3.92025C66.7487 4.06322 66.69 4.26476 66.6347 4.53003L66.1876 6.64702H65.5109L66.3637 2.60423Z"
                                fill="#005CA9" />
                            <path
                                d="M70.6365 2.62317H71.3236L70.4759 6.64701H69.7888L70.6382 2.62317H70.6365ZM70.9593 1.10217H71.6464L71.4807 1.87215H70.7936L70.9593 1.10217Z"
                                fill="#005CA9" />
                            <path
                                d="M72.3473 2.60423H72.9896L72.8687 3.17784C73.1087 2.94185 73.3469 2.77132 73.58 2.66797C73.8148 2.56461 74.0617 2.51294 74.3223 2.51294C74.8938 2.51294 75.2356 2.71275 75.3513 3.11238C75.4169 3.33114 75.4065 3.64464 75.3219 4.05288L74.7729 6.64529H74.0858L74.6227 4.09767C74.6745 3.85135 74.6814 3.65153 74.6417 3.50167C74.5744 3.25018 74.3828 3.12444 74.0668 3.12444C73.9063 3.12444 73.7716 3.14166 73.6611 3.17439C73.4626 3.22951 73.2761 3.33976 73.1018 3.50684C72.9619 3.63948 72.8601 3.77728 72.7962 3.92025C72.7323 4.06322 72.6736 4.26476 72.6184 4.53003L72.1713 6.64702H71.4945L72.3473 2.60423Z"
                                fill="#005CA9" />
                            <path
                                d="M78.8351 2.76614C78.9456 2.85399 79.0475 2.98145 79.1424 3.15026L79.2512 2.64039H79.8744L79.0975 6.31628C78.9905 6.82959 78.8299 7.23439 78.6176 7.53238C78.2188 8.08015 77.6318 8.35575 76.8532 8.35575C76.4199 8.35575 76.0763 8.25929 75.8226 8.06292C75.5688 7.86828 75.4669 7.56167 75.5204 7.14826H76.2075C76.2024 7.32912 76.2386 7.46865 76.3163 7.56683C76.4371 7.71842 76.6599 7.79248 76.9879 7.79248C77.5058 7.79248 77.8839 7.60817 78.1221 7.24127C78.2619 7.02424 78.388 6.63839 78.4985 6.08201C78.3206 6.28872 78.1256 6.44202 77.9149 6.54193C77.7026 6.64356 77.4419 6.69351 77.1277 6.69351C76.6927 6.69351 76.3439 6.53848 76.0815 6.2267C75.8191 5.91493 75.7656 5.40161 75.9175 4.68504C76.0608 4.00808 76.337 3.47927 76.7462 3.10031C77.1553 2.71963 77.5921 2.53015 78.0582 2.53015C78.3742 2.53015 78.6331 2.60767 78.8351 2.76442V2.76614ZM78.0548 3.13648C77.5783 3.13648 77.2071 3.36041 76.9395 3.80827C76.7945 4.0477 76.6806 4.35948 76.6012 4.74705C76.5045 5.2018 76.5217 5.54803 76.6564 5.78574C76.7911 6.02345 77.012 6.1423 77.3228 6.1423C77.8079 6.1423 78.1963 5.92182 78.4864 5.48257C78.6486 5.23453 78.766 4.94342 78.8351 4.61097C78.9421 4.11144 78.9197 3.74109 78.7626 3.49821C78.6072 3.25706 78.3707 3.13648 78.053 3.13648H78.0548Z"
                                fill="#005CA9" />
                            <path d="M82.5331 4.14417H84.4183L84.2716 4.84351H82.3864L82.5331 4.14417Z"
                                fill="#0C0D0E" />
                            <path
                                d="M88.1611 1.10217H88.9156L88.4304 3.39314H91.2997L91.7848 1.10217H92.5392L91.367 6.64701H90.6126L91.1616 4.05459H88.2923L87.7433 6.64701H86.9889L88.1611 1.10217Z"
                                fill="#21A612" />
                            <path
                                d="M95.7986 2.60425H96.5462C96.396 2.86435 96.0593 3.45518 95.5362 4.37846C95.146 5.07264 94.8215 5.63935 94.5643 6.07687C93.9531 7.10867 93.544 7.73739 93.3368 7.96477C93.1296 8.19042 92.8292 8.30411 92.4391 8.30411C92.3441 8.30411 92.2716 8.30066 92.2215 8.29377C92.1715 8.28516 92.111 8.27138 92.042 8.25243L92.1732 7.62888C92.2837 7.6616 92.3648 7.68227 92.4149 7.68916C92.465 7.69605 92.5116 7.70122 92.5513 7.70122C92.6756 7.70122 92.7723 7.68055 92.8396 7.63921C92.9069 7.59787 92.9673 7.54792 93.0191 7.48763C93.0364 7.46696 93.1037 7.36361 93.2194 7.17757C93.3351 6.99154 93.4214 6.85374 93.4766 6.76244L92.8689 2.60597H93.6355L94.0187 5.89773L95.7986 2.60597V2.60425Z"
                                fill="#21A612" />
                            <path
                                d="M99.3429 2.76614C99.4534 2.85399 99.5553 2.98145 99.6502 3.15026L99.759 2.64039H100.382L99.6053 6.31628C99.4983 6.82959 99.3377 7.23439 99.1254 7.53238C98.7266 8.08015 98.1396 8.35575 97.361 8.35575C96.9277 8.35575 96.5841 8.25929 96.3304 8.06292C96.0766 7.86828 95.9747 7.56167 96.0282 7.14826H96.7153C96.7102 7.32912 96.7464 7.46865 96.8241 7.56683C96.945 7.71842 97.1677 7.79248 97.4957 7.79248C98.0136 7.79248 98.3917 7.60817 98.6299 7.24127C98.7697 7.02424 98.8958 6.63839 99.0063 6.08201C98.8285 6.28872 98.6334 6.44202 98.4228 6.54193C98.2104 6.64356 97.9497 6.69351 97.6355 6.69351C97.2005 6.69351 96.8517 6.53848 96.5893 6.2267C96.3269 5.91665 96.2734 5.40161 96.4253 4.68504C96.5686 4.00808 96.8448 3.47927 97.254 3.10031C97.6631 2.71963 98.0999 2.53015 98.566 2.53015C98.882 2.53015 99.1409 2.60767 99.3429 2.76442V2.76614ZM98.5626 3.13648C98.0861 3.13648 97.7149 3.36041 97.4473 3.80827C97.3023 4.0477 97.1884 4.35948 97.109 4.74705C97.0123 5.2018 97.0295 5.54803 97.1642 5.78574C97.2989 6.02345 97.5199 6.1423 97.8306 6.1423C98.3157 6.1423 98.7042 5.92182 98.9942 5.48257C99.1565 5.23453 99.2739 4.94342 99.3429 4.61097C99.4499 4.11144 99.4275 3.74109 99.2704 3.49821C99.115 3.25706 98.8785 3.13648 98.5609 3.13648H98.5626Z"
                                fill="#21A612" />
                            <path
                                d="M101.404 2.62317H102.091L101.244 6.64701H100.557L101.406 2.62317H101.404ZM101.727 1.10217H102.414L102.248 1.87215H101.561L101.727 1.10217Z"
                                fill="#21A612" />
                            <path
                                d="M106.097 3.23813C106.19 3.44139 106.229 3.67909 106.217 3.95126C106.219 4.13729 106.178 4.43356 106.09 4.8418H103.143C103.067 5.25177 103.094 5.58077 103.224 5.82881C103.353 6.07686 103.605 6.20088 103.983 6.20088C104.336 6.20088 104.641 6.08375 104.9 5.84948C105.05 5.7134 105.169 5.55665 105.256 5.37751H105.92C105.87 5.52565 105.777 5.69101 105.641 5.8736C105.504 6.05619 105.363 6.20433 105.214 6.32146C104.966 6.52299 104.684 6.65907 104.367 6.7297C104.194 6.76932 104.004 6.78999 103.799 6.78999C103.298 6.78999 102.913 6.6074 102.642 6.2405C102.371 5.87532 102.307 5.36201 102.447 4.70228C102.585 4.05288 102.872 3.52579 103.307 3.12099C103.742 2.7162 104.242 2.51294 104.809 2.51294C105.094 2.51294 105.356 2.58012 105.598 2.71448C105.838 2.84883 106.003 3.02281 106.097 3.23813ZM105.508 4.30265C105.542 4.0081 105.529 3.77383 105.466 3.59641C105.351 3.26913 105.076 3.10549 104.645 3.10549C104.334 3.10549 104.051 3.21745 103.792 3.44311C103.535 3.66876 103.362 3.9547 103.274 4.30265H105.508Z"
                                fill="#21A612" />
                            <path
                                d="M107.391 2.60423H108.034L107.913 3.17784C108.153 2.94185 108.391 2.77132 108.624 2.66797C108.859 2.56461 109.106 2.51294 109.366 2.51294C109.938 2.51294 110.28 2.71275 110.395 3.11238C110.461 3.33114 110.451 3.64464 110.366 4.05288L109.817 6.64529H109.13L109.667 4.09767C109.719 3.85135 109.725 3.65153 109.686 3.50167C109.618 3.25018 109.427 3.12444 109.111 3.12444C108.95 3.12444 108.816 3.14166 108.705 3.17439C108.507 3.22951 108.32 3.33976 108.146 3.50684C108.006 3.63948 107.904 3.77728 107.84 3.92025C107.776 4.06322 107.718 4.26476 107.662 4.53003L107.215 6.64702H106.539L107.391 2.60423Z"
                                fill="#21A612" />
                            <path
                                d="M114.649 3.23813C114.742 3.44139 114.782 3.67909 114.77 3.95126C114.772 4.13729 114.73 4.43356 114.642 4.8418H111.695C111.619 5.25177 111.647 5.58077 111.776 5.82881C111.906 6.07686 112.158 6.20088 112.536 6.20088C112.888 6.20088 113.194 6.08375 113.453 5.84948C113.603 5.7134 113.722 5.55665 113.808 5.37751H114.473C114.423 5.52565 114.33 5.69101 114.193 5.8736C114.057 6.05619 113.915 6.20433 113.767 6.32146C113.518 6.52299 113.237 6.65907 112.919 6.7297C112.747 6.76932 112.557 6.78999 112.351 6.78999C111.851 6.78999 111.466 6.6074 111.195 6.2405C110.924 5.87532 110.86 5.36201 110.999 4.70228C111.138 4.05288 111.424 3.52579 111.859 3.12099C112.294 2.7162 112.795 2.51294 113.361 2.51294C113.646 2.51294 113.908 2.58012 114.15 2.71448C114.39 2.84883 114.556 3.02281 114.649 3.23813ZM114.06 4.30265C114.095 4.0081 114.081 3.77383 114.019 3.59641C113.903 3.26913 113.629 3.10549 113.197 3.10549C112.886 3.10549 112.603 3.21745 112.344 3.44311C112.085 3.66876 111.914 3.9547 111.826 4.30265H114.06Z"
                                fill="#21A612" />
                        </svg>
                    </div>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Về chúng tôi</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dịch vụ
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liên hệ</a>
                    </li>
                </ul>
            </div>
            <div class="navbar-icons">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                    <path d="M22.7668 20.14L18.5682 15.9421C18.3787 15.7526 18.1218 15.6474 17.8523 15.6474H17.1658C18.3281 14.1611 19.0188 12.2916 19.0188 10.2579C19.0188 5.42 15.0981 1.5 10.2594 1.5C5.42067 1.5 1.5 5.42 1.5 10.2579C1.5 15.0958 5.42067 19.0158 10.2594 19.0158C12.2934 19.0158 14.1632 18.3253 15.6498 17.1632V17.8495C15.6498 18.1189 15.7551 18.3758 15.9446 18.5653L20.1432 22.7632C20.539 23.1589 21.1791 23.1589 21.5708 22.7632L22.7626 21.5716C23.1584 21.1758 23.1584 20.5358 22.7668 20.14ZM10.2594 15.6474C7.28204 15.6474 4.869 13.2389 4.869 10.2579C4.869 7.28105 7.27783 4.86842 10.2594 4.86842C13.2367 4.86842 15.6498 7.27684 15.6498 10.2579C15.6498 13.2347 13.241 15.6474 10.2594 15.6474Z" fill="#005CA9"/>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                    <path d="M12.5117 12.5C15.4892 12.5 17.9023 10.0869 17.9023 7.10938C17.9023 4.1319 15.4892 1.71875 12.5117 1.71875C9.53424 1.71875 7.12109 4.1319 7.12109 7.10938C7.12109 10.0869 9.53424 12.5 12.5117 12.5ZM16.2852 13.8477H15.5818C14.6469 14.2772 13.6067 14.5215 12.5117 14.5215C11.4167 14.5215 10.3807 14.2772 9.44159 13.8477H8.73828C5.6134 13.8477 3.07812 16.3829 3.07812 19.5078V21.2598C3.07812 22.3758 3.98358 23.2812 5.09961 23.2812H19.9238C21.0399 23.2812 21.9453 22.3758 21.9453 21.2598V19.5078C21.9453 16.3829 19.41 13.8477 16.2852 13.8477Z" fill="#005CA9"/>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                    <g clip-path="url(#clip0_755_15810)">
                      <path d="M18.5 8V6.5C18.5 3.19156 15.8084 0.5 12.5 0.5C9.19156 0.5 6.5 3.19156 6.5 6.5V8H2V20.75C2 22.8211 3.67892 24.5 5.75 24.5H19.25C21.3211 24.5 23 22.8211 23 20.75V8H18.5ZM9.5 6.5C9.5 4.84578 10.8458 3.5 12.5 3.5C14.1542 3.5 15.5 4.84578 15.5 6.5V8H9.5V6.5ZM17 12.125C16.3787 12.125 15.875 11.6213 15.875 11C15.875 10.3787 16.3787 9.875 17 9.875C17.6213 9.875 18.125 10.3787 18.125 11C18.125 11.6213 17.6213 12.125 17 12.125ZM8 12.125C7.37867 12.125 6.875 11.6213 6.875 11C6.875 10.3787 7.37867 9.875 8 9.875C8.62133 9.875 9.125 10.3787 9.125 11C9.125 11.6213 8.62133 12.125 8 12.125Z" fill="#005CA9"/>
                    </g>
                    <defs>
                      <clipPath id="clip0_755_15810">
                        <rect width="24" height="24" fill="white" transform="translate(0.5 0.5)"/>
                      </clipPath>
                    </defs>
                  </svg>
            </div>
        </div>
    </nav>