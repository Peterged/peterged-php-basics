<?php
$role = $_SESSION['role'];
?>

<div class="sidebar noprint">
    <div class="header">
        <div class="logo">
            <a href="<?= routeTo('/panel') ?>">
                <img src="<?= PROJECT_ROOT ?>/public/images/logo.svg" alt="">
            </a>
        </div>
        <div class="toggle-btn">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.46967 7.46967C8.76256 7.17678 9.23744 7.17678 9.53033 7.46967L12 9.93934L14.4697 7.46967C14.7626 7.17678 15.2374 7.17678 15.5303 7.46967C15.8232 7.76256 15.8232 8.23744 15.5303 8.53033L12.5303 11.5303C12.2374 11.8232 11.7626 11.8232 11.4697 11.5303L8.46967 8.53033C8.17678 8.23744 8.17678 7.76256 8.46967 7.46967ZM2.75 15C2.75 14.5858 3.08579 14.25 3.5 14.25H20.5C20.9142 14.25 21.25 14.5858 21.25 15C21.25 15.4142 20.9142 15.75 20.5 15.75H3.5C3.08579 15.75 2.75 15.4142 2.75 15Z" fill="#121212" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.16243 3.90806C6.02005 4.06164 5.34473 4.35193 4.84833 4.84833C4.3519 5.34476 4.06163 6.01987 3.90806 7.16206C3.75159 8.32585 3.75 9.8573 3.75 12C3.75 14.1422 3.75159 15.6737 3.90806 16.8376C4.06164 17.98 4.35193 18.6553 4.84833 19.1517C5.34476 19.6481 6.01987 19.9384 7.16206 20.0919C8.32585 20.2484 9.8573 20.25 12 20.25C14.1422 20.25 15.6737 20.2484 16.8376 20.0919C17.98 19.9384 18.6553 19.6481 19.1517 19.1517C19.6481 18.6552 19.9384 17.9801 20.0919 16.8379C20.2484 15.6742 20.25 14.1427 20.25 12C20.25 9.8578 20.2484 8.32634 20.0919 7.16243C19.9384 6.02005 19.6481 5.34473 19.1517 4.84833C18.6552 4.3519 17.9801 4.06163 16.8379 3.90806C15.6742 3.75159 14.1427 3.75 12 3.75C9.8578 3.75 8.32634 3.75159 7.16243 3.90806ZM11.9431 2.25H12.057C14.1302 2.24999 15.7625 2.24997 17.0378 2.42144C18.3464 2.59737 19.3908 2.9661 20.2123 3.78767C21.0339 4.60927 21.4026 5.65395 21.5786 6.96257C21.75 8.238 21.75 9.87033 21.75 11.9431V12.0569C21.75 14.1302 21.75 15.7625 21.5786 17.0378C21.4026 18.3464 21.0339 19.3908 20.2123 20.2123C19.3907 21.0339 18.346 21.4026 17.0374 21.5786C15.762 21.75 14.1297 21.75 12.0569 21.75H11.9431C9.86984 21.75 8.2375 21.75 6.96219 21.5786C5.65363 21.4026 4.60924 21.0339 3.78767 20.2123C2.96607 19.3907 2.59736 18.346 2.42144 17.0374C2.24997 15.762 2.24999 14.1297 2.25 12.0569V11.943C2.24999 9.86984 2.24997 8.2375 2.42144 6.96219C2.59737 5.65363 2.9661 4.60924 3.78767 3.78767C4.60927 2.96607 5.65395 2.59736 6.96257 2.42144C8.238 2.24997 9.87034 2.24999 11.9431 2.25Z" fill="#121212" />
            </svg>
        </div>
    </div>
    <!-- <span class="line"></span> -->
    
    <div class="btn-group">
        <span class="section-title">MAIN MENU</span>
        <a class="btn" href="<?= routeTo('/panel/dashboard') ?>">
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.9167 8.25V2.75H19.25V8.25H11.9167ZM2.75 11.9167V2.75H10.0833V11.9167H2.75ZM11.9167 19.25V10.0833H19.25V19.25H11.9167ZM2.75 19.25V13.75H10.0833V19.25H2.75ZM4.58333 10.0833H8.25V4.58333H4.58333V10.0833ZM13.75 17.4167H17.4167V11.9167H13.75V17.4167ZM13.75 6.41667H17.4167V4.58333H13.75V6.41667ZM4.58333 17.4167H8.25V15.5833H4.58333V17.4167Z" fill="black" />
            </svg>

            Dashboard
        </a>
        <a class="btn" href="<?= routeTo('/panel/outlet') ?>">
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.5523 2.72346C17.3889 2.4526 17.1585 2.22841 16.8833 2.07251C16.6081 1.9166 16.2974 1.83424 15.9811 1.83337H6.01875C5.37892 1.83337 4.77667 2.17437 4.44759 2.72346L1.96434 6.86129C1.8784 7.00375 1.83307 7.167 1.83325 7.33337C1.83691 8.21815 2.16279 9.0713 2.74992 9.73321V17.4167C2.74992 18.4278 3.57217 19.25 4.58325 19.25H17.4166C18.4277 19.25 19.2499 18.4278 19.2499 17.4167V9.73321C19.837 9.0713 20.1629 8.21815 20.1666 7.33337C20.1668 7.167 20.1214 7.00375 20.0355 6.86129L17.5523 2.72346ZM18.3186 7.56346C18.262 8.00604 18.0462 8.41288 17.7115 8.70794C17.3768 9.00299 16.9461 9.16608 16.4999 9.16671C15.4888 9.16671 14.6666 8.34446 14.6666 7.33337C14.6666 7.27104 14.6437 7.21604 14.6308 7.15737L14.6492 7.15371L13.9516 3.66671H15.9811L18.3186 7.56346ZM9.91734 3.66671H12.0816L12.8268 7.39296C12.7948 8.37562 11.9899 9.16671 10.9999 9.16671C10.0099 9.16671 9.20509 8.37562 9.173 7.39296L9.91734 3.66671ZM6.01875 3.66671H8.04825L7.35159 7.15371L7.36992 7.15737C7.35617 7.21604 7.33325 7.27104 7.33325 7.33337C7.33325 8.34446 6.511 9.16671 5.49992 9.16671C5.05373 9.16608 4.62304 9.00299 4.28834 8.70794C3.95364 8.41288 3.73783 8.00604 3.68125 7.56346L6.01875 3.66671ZM9.16659 17.4167V14.6667H12.8333V17.4167H9.16659ZM14.6666 17.4167V14.6667C14.6666 13.6556 13.8443 12.8334 12.8333 12.8334H9.16659C8.1555 12.8334 7.33325 13.6556 7.33325 14.6667V17.4167H4.58325V10.8699C4.8775 10.946 5.18092 11 5.49992 11C6.02042 11.0003 6.53498 10.8895 7.00921 10.675C7.48345 10.4605 7.90644 10.1472 8.24992 9.75612C8.92184 10.5188 9.90634 11 10.9999 11C12.0935 11 13.078 10.5188 13.7499 9.75612C14.0934 10.1472 14.5164 10.4605 14.9906 10.675C15.4649 10.8895 15.9794 11.0003 16.4999 11C16.8189 11 17.1223 10.946 17.4166 10.8699V17.4167H14.6666Z" fill="black" />
            </svg>

            Outlet
        </a>
        <a class="btn" href="<?= routeTo('/panel/paket') ?>">
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.2225 5.68481L11.66 1.54692C11.4579 1.43527 11.2309 1.37671 11 1.37671C10.7691 1.37671 10.5421 1.43527 10.34 1.54692L2.7775 5.68653C2.56153 5.8047 2.38125 5.97868 2.25547 6.19032C2.1297 6.40195 2.06306 6.64347 2.0625 6.88966V15.1087C2.06306 15.3549 2.1297 15.5964 2.25547 15.8081C2.38125 16.0197 2.56153 16.1937 2.7775 16.3118L10.34 20.4515C10.5421 20.5631 10.7691 20.6217 11 20.6217C11.2309 20.6217 11.4579 20.5631 11.66 20.4515L19.2225 16.3118C19.4385 16.1937 19.6188 16.0197 19.7445 15.8081C19.8703 15.5964 19.9369 15.3549 19.9375 15.1087V6.89051C19.9374 6.64389 19.871 6.40184 19.7452 6.18971C19.6194 5.97758 19.4389 5.80319 19.2225 5.68481ZM11 2.75005L17.9042 6.5313L15.3459 7.93208L8.44078 4.15083L11 2.75005ZM11 10.3125L4.09578 6.5313L7.00906 4.9363L13.9133 8.71755L11 10.3125ZM3.4375 7.73442L10.3125 11.4968V18.8693L3.4375 15.1096V7.73442ZM18.5625 15.1061L11.6875 18.8693V11.5002L14.4375 9.99544V13.0625C14.4375 13.2449 14.5099 13.4198 14.6389 13.5487C14.7678 13.6776 14.9427 13.75 15.125 13.75C15.3073 13.75 15.4822 13.6776 15.6111 13.5487C15.7401 13.4198 15.8125 13.2449 15.8125 13.0625V9.24262L18.5625 7.73442V15.1053V15.1061Z" fill="#121212" />
            </svg>

            Packages
        </a>
        <div id="dropdown-group" aria-expanded="false">
            <a class="btn" id="btn-dropdown" aria-expanded="false">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11 11C12.094 11 13.1432 10.5654 13.9168 9.79182C14.6904 9.01823 15.125 7.96902 15.125 6.875C15.125 5.78098 14.6904 4.73177 13.9168 3.95818C13.1432 3.1846 12.094 2.75 11 2.75C9.90598 2.75 8.85677 3.1846 8.08318 3.95818C7.3096 4.73177 6.875 5.78098 6.875 6.875C6.875 7.96902 7.3096 9.01823 8.08318 9.79182C8.85677 10.5654 9.90598 11 11 11ZM13.75 6.875C13.75 7.60435 13.4603 8.30382 12.9445 8.81954C12.4288 9.33527 11.7293 9.625 11 9.625C10.2707 9.625 9.57118 9.33527 9.05546 8.81954C8.53973 8.30382 8.25 7.60435 8.25 6.875C8.25 6.14565 8.53973 5.44618 9.05546 4.93046C9.57118 4.41473 10.2707 4.125 11 4.125C11.7293 4.125 12.4288 4.41473 12.9445 4.93046C13.4603 5.44618 13.75 6.14565 13.75 6.875ZM19.25 17.875C19.25 19.25 17.875 19.25 17.875 19.25H4.125C4.125 19.25 2.75 19.25 2.75 17.875C2.75 16.5 4.125 12.375 11 12.375C17.875 12.375 19.25 16.5 19.25 17.875ZM17.875 17.8695C17.8736 17.5313 17.6633 16.5137 16.731 15.5815C15.8345 14.685 14.1474 13.75 11 13.75C7.85262 13.75 6.1655 14.685 5.269 15.5815C4.33675 16.5137 4.12775 17.5313 4.125 17.8695H17.875Z" fill="black" />
                </svg>

                <p>Users</p>
            </a>
            <div class="dropdown">
                <div class="dropdown-item-group">
                    <div class="dropdown-item">
                        <svg width="15" height="45" viewBox="0 0 15 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1 0C1.27614 0 1.5 0.223858 1.5 0.5V41.5C1.5 41.9363 1.61249 42.5907 1.92875 43.1178C2.22933 43.6187 2.70456 44 3.5 44H14C14.2761 44 14.5 44.2239 14.5 44.5C14.5 44.7761 14.2761 45 14 45H3.5C2.29544 45 1.52067 44.3813 1.07125 43.6322C0.637507 42.9093 0.5 42.0637 0.5 41.5V0.5C0.5 0.223858 0.723858 0 1 0Z" fill="#121212" />
                        </svg>

                        <a href="<?= routeTo('/panel/member') ?>">Member</a>
                    </div>
                    <div class="dropdown-item">
                        <svg width="15" height="45" viewBox="0 0 15 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1 0C1.27614 0 1.5 0.223858 1.5 0.5V41.5C1.5 41.9363 1.61249 42.5907 1.92875 43.1178C2.22933 43.6187 2.70456 44 3.5 44H14C14.2761 44 14.5 44.2239 14.5 44.5C14.5 44.7761 14.2761 45 14 45H3.5C2.29544 45 1.52067 44.3813 1.07125 43.6322C0.637507 42.9093 0.5 42.0637 0.5 41.5V0.5C0.5 0.223858 0.723858 0 1 0Z" fill="#121212" />
                        </svg>

                        <a href="<?= routeTo('/panel/karyawan') ?>">Karyawan</a>
                    </div>
                </div>
            </div>
        </div>

        <a class="btn" href="<?= routeTo('/panel/transaksi') ?>">
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_112_6)">
                    <path d="M10.9967 2.33223e-06C4.93532 -0.00391872 -0.0104396 4.93687 1.65491e-05 10.9962C0.00524462 14.0078 1.06994 16.6221 3.20117 18.734C6.02955 21.5365 9.4644 22.5262 13.3593 21.7443C15.4364 21.3274 17.2409 20.3095 18.7406 18.802C20.8828 16.6485 21.9475 14.0332 22 11.2623C21.9809 4.9204 17.077 0.00392339 10.9967 2.33223e-06ZM20.3419 12.1673C20.3244 12.4308 20.2497 12.6807 20.2235 12.9405C20.2078 13.0966 20.1456 13.2456 20.108 13.3985C20.0502 13.6314 19.9828 13.8635 19.9012 14.0918C19.8061 14.3579 19.7054 14.6208 19.5894 14.8778C19.231 15.6719 18.7714 16.4049 18.2102 17.0702C17.5368 17.8683 16.751 18.5406 15.856 19.0793C15.3606 19.3773 14.842 19.6327 14.298 19.8317C14.1339 19.8918 13.9734 19.9663 13.798 19.9922C13.5901 20.0609 13.3768 20.1103 13.1672 20.1717C13.0106 20.2065 12.8553 20.2491 12.6972 20.2745C12.0052 20.3861 11.3096 20.4635 10.608 20.4227C10.2016 20.3992 9.79481 20.3654 9.39408 20.2839C9.34781 20.2745 9.29893 20.2773 9.25109 20.2745C9.04197 20.2287 8.83337 20.1806 8.62477 20.1328C8.57903 20.1223 8.53145 20.1174 8.49015 20.0918C8.06746 19.9697 7.65261 19.8272 7.24979 19.6492C6.48335 19.3109 5.76946 18.8849 5.11464 18.3631C4.23057 17.6586 3.4976 16.8169 2.9131 15.8523C2.60909 15.3504 2.36049 14.8179 2.1532 14.2656C2.01492 13.897 1.92055 13.5169 1.80396 13.1429C1.75221 12.9766 1.75299 12.7944 1.71456 12.6229C1.63562 12.2716 1.61366 11.9135 1.58569 11.5574C1.55432 11.1591 1.54544 10.7578 1.59772 10.3586C1.60687 10.2896 1.60922 10.2201 1.61392 10.1506C1.65287 9.55039 1.77782 8.96667 1.93963 8.38897C2.08001 7.88734 2.27057 7.40635 2.49564 6.9374C2.73221 6.44413 3.01243 5.97883 3.32716 5.53104C3.8071 4.84826 4.3767 4.25252 5.01479 3.71873C5.61811 3.21396 6.28469 2.80669 6.98917 2.46295C7.29135 2.31552 7.60085 2.17384 7.92081 2.07476C8.22692 1.98014 8.53668 1.88995 8.85036 1.81624C9.2592 1.72004 9.67849 1.68736 10.0868 1.59274C10.0993 1.58986 10.1129 1.59143 10.126 1.59169C10.573 1.59927 11.0198 1.54281 11.4665 1.57574C11.7977 1.60005 12.1325 1.61626 12.4572 1.67978C13.0114 1.78827 13.5679 1.88995 14.0986 2.10064C14.3487 2.19998 14.591 2.31891 14.8412 2.41145C15.3222 2.58973 15.7525 2.85322 16.1783 3.12718C16.8676 3.57025 17.4769 4.10822 18.0241 4.71756C18.4162 5.15436 18.7594 5.62619 19.0645 6.12809C19.3692 6.62972 19.6241 7.15436 19.8322 7.70174C19.9666 8.05568 20.0855 8.41642 20.1621 8.78683C20.2298 9.11411 20.2928 9.44295 20.3401 9.77493C20.4159 10.3061 20.4447 10.8381 20.4219 11.3721C20.4099 11.638 20.3594 11.903 20.3419 12.1673Z" fill="black" />
                    <path d="M5.79846 13.1917C5.61705 13.02 5.47327 12.8265 5.48478 12.5617C5.49941 12.2266 5.74252 11.9129 6.04732 11.8261C6.14064 11.7995 6.22978 11.7851 6.32388 11.7851C9.4372 11.7848 12.5508 11.7869 15.6641 11.7825C16.0761 11.7819 16.3905 12.052 16.4721 12.3798C16.533 12.6242 16.4752 12.8464 16.3414 13.0482C15.8385 13.806 15.3303 14.5607 14.8247 15.3169C14.5589 15.7145 14.2394 15.7707 13.8842 15.6706C13.6526 15.6055 13.4882 15.4272 13.4014 15.1859C13.2858 14.8647 13.404 14.6035 13.5812 14.3474C13.7815 14.0577 13.9733 13.7621 14.1702 13.4701C14.183 13.451 14.1921 13.4338 14.1916 13.4113C14.1963 13.3854 14.1864 13.3695 14.1597 13.3666C14.1163 13.3616 14.0729 13.3645 14.0293 13.3645C11.4537 13.3642 8.87806 13.3634 6.30245 13.3661C6.11032 13.3661 5.94903 13.2999 5.79846 13.1917Z" fill="black" />
                    <path d="M7.7499 8.64488C7.82518 8.64488 7.88008 8.64488 7.93523 8.64488C10.5174 8.64488 13.0998 8.64723 15.6819 8.64227C16.0743 8.64148 16.3971 8.90472 16.469 9.23356C16.5495 9.60109 16.3833 10.0295 15.9598 10.1699C15.8411 10.2094 15.7266 10.2146 15.608 10.2146C12.5163 10.2151 9.42445 10.2143 6.33283 10.2159C6.00712 10.2162 5.75199 10.0857 5.59933 9.80211C5.43961 9.50542 5.48039 9.21605 5.67174 8.93295C6.11429 8.27891 6.54038 7.61364 6.98242 6.95909C7.09926 6.78604 7.19755 6.59678 7.36485 6.45876C7.75147 6.13985 8.4353 6.29852 8.59946 6.82734C8.68154 7.0911 8.63187 7.31433 8.49019 7.53052C8.25127 7.89544 8.00764 8.25722 7.7499 8.64488Z" fill="black" />
                </g>
                <defs>
                    <clipPath id="clip0_112_6">
                        <rect width="22" height="22.0029" fill="white" />
                    </clipPath>
                </defs>
            </svg>

            Transaction
        </a>
        <a class="btn" href="<?= routeTo('/panel/report') ?>">
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.4375 11.9166C14.4375 11.7343 14.3651 11.5594 14.2361 11.4305C14.1072 11.3016 13.9323 11.2291 13.75 11.2291H8.25C8.06766 11.2291 7.8928 11.3016 7.76386 11.4305C7.63493 11.5594 7.5625 11.7343 7.5625 11.9166C7.5625 12.099 7.63493 12.2738 7.76386 12.4028C7.8928 12.5317 8.06766 12.6041 8.25 12.6041H13.75C13.9323 12.6041 14.1072 12.5317 14.2361 12.4028C14.3651 12.2738 14.4375 12.099 14.4375 11.9166ZM14.4375 15.5833C14.4375 15.401 14.3651 15.2261 14.2361 15.0972C14.1072 14.9682 13.9323 14.8958 13.75 14.8958H8.25C8.06766 14.8958 7.8928 14.9682 7.76386 15.0972C7.63493 15.2261 7.5625 15.401 7.5625 15.5833C7.5625 15.7656 7.63493 15.9405 7.76386 16.0694C7.8928 16.1984 8.06766 16.2708 8.25 16.2708H13.75C13.9323 16.2708 14.1072 16.1984 14.2361 16.0694C14.3651 15.9405 14.4375 15.7656 14.4375 15.5833Z" fill="black" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.41659 2.0625C5.74802 2.0625 5.10683 2.32809 4.63409 2.80084C4.16134 3.27358 3.89575 3.91477 3.89575 4.58333V17.4167C3.89575 18.0852 4.16134 18.7264 4.63409 19.1992C5.10683 19.6719 5.74802 19.9375 6.41659 19.9375H15.5833C16.2518 19.9375 16.893 19.6719 17.3657 19.1992C17.8385 18.7264 18.1041 18.0852 18.1041 17.4167V7.304C18.1041 6.95475 17.9904 6.61558 17.7796 6.33692L15.0314 2.69958C14.8819 2.50169 14.6885 2.34117 14.4665 2.23062C14.2444 2.12008 13.9998 2.06253 13.7518 2.0625H6.41659ZM5.27075 4.58333C5.27075 3.95083 5.78409 3.4375 6.41659 3.4375H13.0624V7.46808C13.0624 7.84758 13.3704 8.15558 13.7499 8.15558H16.7291V17.4167C16.7291 18.0492 16.2158 18.5625 15.5833 18.5625H6.41659C5.78409 18.5625 5.27075 18.0492 5.27075 17.4167V4.58333Z" fill="black" />
            </svg>

            Report
        </a>


        <!-- <span class="section-title section-title--xl-margin">SETTINGS</span>
        <a class="btn" href="">
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M11 7.25C10.0054 7.25 9.05161 7.64509 8.34835 8.34835C7.64509 9.05161 7.25 10.0054 7.25 11C7.25 11.9946 7.64509 12.9484 8.34835 13.6517C9.05161 14.3549 10.0054 14.75 11 14.75C11.9946 14.75 12.9484 14.3549 13.6517 13.6517C14.3549 12.9484 14.75 11.9946 14.75 11C14.75 10.0054 14.3549 9.05161 13.6517 8.34835C12.9484 7.64509 11.9946 7.25 11 7.25ZM8.75 11C8.75 10.4033 8.98705 9.83097 9.40901 9.40901C9.83097 8.98705 10.4033 8.75 11 8.75C11.5967 8.75 12.169 8.98705 12.591 9.40901C13.0129 9.83097 13.25 10.4033 13.25 11C13.25 11.5967 13.0129 12.169 12.591 12.591C12.169 13.0129 11.5967 13.25 11 13.25C10.4033 13.25 9.83097 13.0129 9.40901 12.591C8.98705 12.169 8.75 11.5967 8.75 11Z" fill="black" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.975 0.25C10.53 0.25 10.159 0.25 9.85502 0.27C9.54428 0.28294 9.23782 0.347138 8.94802 0.46C8.61427 0.59809 8.31099 0.800573 8.05551 1.05589C7.80002 1.3112 7.59733 1.61434 7.45902 1.948C7.31402 2.298 7.27502 2.668 7.25902 3.07C7.25742 3.21702 7.2185 3.36123 7.14591 3.48909C7.07332 3.61695 6.96944 3.72428 6.84402 3.801C6.7149 3.8715 6.56998 3.90803 6.42287 3.90716C6.27576 3.90628 6.13129 3.86803 6.00302 3.796C5.64702 3.608 5.30702 3.457 4.93102 3.407C4.57296 3.3599 4.20914 3.38379 3.86031 3.4773C3.51149 3.57081 3.1845 3.73212 2.89802 3.952C2.65579 4.14688 2.44733 4.38034 2.28102 4.643C2.11102 4.897 1.92502 5.218 1.70302 5.603L1.67802 5.647C1.45502 6.032 1.27002 6.353 1.13602 6.627C0.996019 6.913 0.886019 7.195 0.846019 7.507C0.750619 8.22999 0.946299 8.96127 1.39002 9.54C1.62102 9.841 1.92202 10.06 2.26202 10.274C2.38878 10.3489 2.49439 10.4549 2.56891 10.5819C2.64344 10.7089 2.68442 10.8528 2.68802 11C2.68442 11.1472 2.64344 11.2911 2.56891 11.4181C2.49439 11.5451 2.38878 11.6511 2.26202 11.726C1.92202 11.94 1.62202 12.159 1.39002 12.46C1.17014 12.7465 1.00883 13.0735 0.915322 13.4223C0.821811 13.7711 0.797922 14.1349 0.845019 14.493C0.886019 14.805 0.995019 15.087 1.13502 15.373C1.27002 15.647 1.45502 15.968 1.67802 16.353L1.70302 16.397C1.92502 16.782 2.11102 17.103 2.28102 17.357C2.45802 17.62 2.64802 17.857 2.89802 18.047C3.18443 18.2671 3.51138 18.4285 3.86021 18.5222C4.20903 18.6159 4.5729 18.64 4.93102 18.593C5.30702 18.543 5.64702 18.393 6.00302 18.204C6.13114 18.1321 6.27544 18.0939 6.42237 18.093C6.56931 18.0921 6.71405 18.1286 6.84302 18.199C6.96914 18.2751 7.07367 18.3823 7.14666 18.5102C7.21966 18.6382 7.25868 18.7827 7.26002 18.93C7.27502 19.332 7.31402 19.702 7.46002 20.052C7.59811 20.3858 7.80059 20.689 8.05591 20.9445C8.31122 21.2 8.61436 21.4027 8.94802 21.541C9.23802 21.661 9.53802 21.708 9.85502 21.729C10.159 21.75 10.53 21.75 10.975 21.75H11.025C11.47 21.75 11.841 21.75 12.145 21.73C12.463 21.708 12.762 21.661 13.052 21.54C13.3858 21.4019 13.689 21.1994 13.9445 20.9441C14.2 20.6888 14.4027 20.3857 14.541 20.052C14.686 19.702 14.725 19.332 14.741 18.93C14.7425 18.7828 14.7813 18.6384 14.8539 18.5103C14.9265 18.3823 15.0305 18.2748 15.156 18.198C15.2852 18.1276 15.4302 18.0913 15.5773 18.0923C15.7244 18.0934 15.8688 18.1318 15.997 18.204C16.353 18.392 16.693 18.543 17.069 18.592C17.792 18.6874 18.5233 18.4917 19.102 18.048C19.352 17.856 19.542 17.62 19.719 17.357C19.889 17.103 20.075 16.782 20.297 16.397L20.322 16.353C20.545 15.968 20.73 15.647 20.864 15.373C21.004 15.087 21.114 14.804 21.154 14.493C21.2494 13.77 21.0537 13.0387 20.61 12.46C20.379 12.159 20.078 11.94 19.738 11.726C19.6113 11.6511 19.5056 11.5451 19.4311 11.4181C19.3566 11.2911 19.3156 11.1472 19.312 11C19.312 10.722 19.464 10.446 19.738 10.274C20.078 10.06 20.378 9.841 20.61 9.54C20.8299 9.25352 20.9912 8.92653 21.0847 8.5777C21.1782 8.22888 21.2021 7.86506 21.155 7.507C21.1074 7.19971 21.0094 6.90238 20.865 6.627C20.6943 6.29475 20.5132 5.96792 20.322 5.647L20.297 5.603C20.1143 5.27709 19.9216 4.95693 19.719 4.643C19.5527 4.38062 19.3442 4.14749 19.102 3.953C18.8156 3.73294 18.4887 3.57146 18.1398 3.47778C17.791 3.38409 17.4271 3.36004 17.069 3.407C16.693 3.457 16.353 3.607 15.997 3.796C15.8689 3.86786 15.7246 3.90601 15.5777 3.90688C15.4307 3.90776 15.286 3.87132 15.157 3.801C15.0312 3.72452 14.9269 3.6173 14.854 3.48942C14.7811 3.36154 14.7418 3.21721 14.74 3.07C14.725 2.668 14.686 2.298 14.54 1.948C14.4019 1.61425 14.1994 1.31097 13.9441 1.05549C13.6888 0.800001 13.3857 0.597314 13.052 0.459C12.762 0.339 12.462 0.292 12.145 0.271C11.841 0.25 11.47 0.25 11.025 0.25H10.975ZM9.52202 1.845C9.59902 1.813 9.71602 1.784 9.95702 1.767C10.204 1.75 10.524 1.75 11 1.75C11.476 1.75 11.796 1.75 12.043 1.767C12.284 1.784 12.401 1.813 12.478 1.845C12.785 1.972 13.028 2.215 13.155 2.522C13.195 2.618 13.228 2.769 13.241 3.126C13.271 3.918 13.68 4.681 14.406 5.1C15.132 5.52 15.997 5.492 16.698 5.122C17.014 4.955 17.161 4.908 17.265 4.895C17.5936 4.85158 17.9259 4.94043 18.189 5.142C18.255 5.193 18.339 5.28 18.474 5.48C18.613 5.686 18.773 5.963 19.011 6.375C19.249 6.787 19.408 7.065 19.517 7.287C19.624 7.504 19.657 7.62 19.667 7.703C19.7104 8.03157 19.6216 8.36392 19.42 8.627C19.356 8.71 19.242 8.814 18.94 9.004C18.268 9.426 17.812 10.162 17.812 11C17.812 11.838 18.268 12.574 18.94 12.996C19.242 13.186 19.356 13.29 19.42 13.373C19.622 13.636 19.71 13.968 19.667 14.297C19.657 14.38 19.623 14.497 19.517 14.713C19.408 14.936 19.249 15.213 19.011 15.625C18.773 16.037 18.612 16.314 18.474 16.52C18.339 16.72 18.255 16.807 18.189 16.858C17.9259 17.0596 17.5936 17.1484 17.265 17.105C17.161 17.092 17.015 17.045 16.698 16.878C15.998 16.508 15.132 16.48 14.406 16.899C13.68 17.319 13.271 18.082 13.241 18.874C13.228 19.231 13.195 19.382 13.155 19.478C13.0922 19.6298 13.0001 19.7677 12.8839 19.8839C12.7677 20.0001 12.6298 20.0922 12.478 20.155C12.401 20.187 12.284 20.216 12.043 20.233C11.796 20.25 11.476 20.25 11 20.25C10.524 20.25 10.204 20.25 9.95702 20.233C9.71602 20.216 9.59902 20.187 9.52202 20.155C9.37022 20.0922 9.2323 20.0001 9.11613 19.8839C8.99997 19.7677 8.90784 19.6298 8.84502 19.478C8.80502 19.382 8.77202 19.231 8.75902 18.874C8.72902 18.082 8.32002 17.319 7.59402 16.9C6.86802 16.48 6.00302 16.508 5.30202 16.878C4.98602 17.045 4.83902 17.092 4.73502 17.105C4.40645 17.1484 4.0741 17.0596 3.81102 16.858C3.74502 16.807 3.66102 16.72 3.52602 16.52C3.33793 16.2272 3.15885 15.9287 2.98902 15.625C2.75102 15.213 2.59202 14.935 2.48302 14.713C2.37602 14.496 2.34302 14.38 2.33302 14.297C2.2896 13.9684 2.37845 13.6361 2.58002 13.373C2.64402 13.29 2.75802 13.186 3.06002 12.996C3.73202 12.574 4.18802 11.838 4.18802 11C4.18802 10.162 3.73202 9.426 3.06002 9.004C2.75802 8.814 2.64402 8.71 2.58002 8.627C2.37845 8.36392 2.2896 8.03157 2.33302 7.703C2.34302 7.62 2.37702 7.503 2.48302 7.287C2.59202 7.064 2.75102 6.787 2.98902 6.375C3.22702 5.963 3.38802 5.686 3.52602 5.48C3.66102 5.28 3.74502 5.193 3.81102 5.142C4.0741 4.94043 4.40645 4.85158 4.73502 4.895C4.83902 4.908 4.98502 4.955 5.30202 5.122C6.00202 5.492 6.86802 5.52 7.59402 5.1C8.32002 4.681 8.72902 3.918 8.75902 3.126C8.77202 2.769 8.80502 2.618 8.84502 2.522C8.97202 2.215 9.21502 1.972 9.52202 1.845Z" fill="black" />
            </svg>

            Settings
        </a> -->

        <span class="section-title section-title--xl-margin">COMMANDS</span>
        <a class="btn" href="<?= routeTo('/') ?>">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                <path d="M19 21H5C4.44772 21 4 20.5523 4 20V11L1 11L11.3273 1.6115C11.7087 1.26475 12.2913 1.26475 12.6727 1.6115L23 11L20 11V20C20 20.5523 19.5523 21 19 21ZM6 19H18V9.15745L12 3.7029L6 9.15745V19Z"></path>
            </svg>

            Home
        </a>
        <a class="btn" href="<?= routeTo('/auth/logout') ?>">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                <path d="M19 21H5C4.44772 21 4 20.5523 4 20V11L1 11L11.3273 1.6115C11.7087 1.26475 12.2913 1.26475 12.6727 1.6115L23 11L20 11V20C20 20.5523 19.5523 21 19 21ZM6 19H18V9.15745L12 3.7029L6 9.15745V19Z"></path>
            </svg>

            Logout
        </a>
    </div>
</div>

<script>
    const body = document.querySelector('body');
    /* FILEPATH: /c:/xampp/htdocs/flaundry/app/views/panel/inc/sidebar.css */

    window.onload = function() {
        const body = document.querySelector('body');
        body.style.transition = '250ms ease-in-out';
    };
    const sidebar = document.querySelector('.sidebar');
    const togglebtn = sidebar.querySelector('.header .toggle-btn');

    togglebtn.addEventListener('click', (e) => {
        sidebar.classList.toggle('collapsed');
    })
</script>

<script>
    const btns = document.querySelectorAll('.sidebar .btn-group');
    const dropdownbtn = document.querySelectorAll('.btn#btn--dropdown');

    dropdownbtn.forEach((item) => {
        item.addEventListener('click', (e) => {
            item.parentElement.classList.toggle('expanded');
        })
    })
</script>

<script>
    function createCookie(name, value, days) {
        let expires;

        if (days) {
            let date = new Date();
            date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
            expires = "; expires=" + date.toGMTString();
        } else {
            expires = "";
        }

        document.cookie = escape(name) + "=" + escape(value) + expires + "; path=/";
    }


    document.addEventListener("DOMContentLoaded", () => {
        createCookie("clientTimezone", Intl.DateTimeFormat().resolvedOptions().timeZone, 30);
    });
</script>