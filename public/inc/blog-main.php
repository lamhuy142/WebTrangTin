<section class="sec-blog bg0 p-t-60 p-b-90">
    <div class="container">
        <div class="p-b-66">
            <h2 class="">
                <a style="font-family: 'Tilt Neon', sans-serif !important;" class="text-decoration-none text-muted" href="">Khuyến Mãi</a>
            </h2>
            <div class="btn-box d-flex justify-content-end mt-3">
                <a style="color:#EF0033 !important;" class="text-decoration-none" href="index.php?action=khuyenmai">
                    Xem Tất Cả
                </a>
            </div>
        </div>

        <div class="row">
            <?php
            $i = 0;
            foreach ($khuyenmai as $km) :
                foreach ($nguoidung as $nd) :
                    if ($nd["MaND"] == $km["MaND"] && $i < 3) {
                        $i++;

            ?>
                        <div class="col-sm-6 col-md-4 p-b-40">
                            <div class="blog-item">
                                <div class="hov-img0">
                                    <a href="index.php?action=detail&id=<?php echo $km['MaKM'] ?>">
                                        <img class="thumnail" width="20px" height="180px" src="../img/khuyenmai/<?php echo $km['HinhAnh']; ?>" alt="IMG-BLOG">
                                    </a>
                                </div>

                                <div class="p-t-15">
                                    <div class="stext-107 flex-w p-b-14">
                                        <span class="m-r-3">
                                            <span style="font-family: 'Tilt Neon', sans-serif !important;" class="cl4">
                                                By
                                            </span>

                                            <span style="font-family: 'Tilt Neon', sans-serif !important;" class="cl5">
                                                <?php echo $nd['HoTen'] ?>
                                            </span>
                                        </span>

                                        <span>
                                            <span style="font-family: 'Tilt Neon', sans-serif !important;" class="cl4">
                                                on
                                            </span>

                                            <span style="font-family: 'Tilt Neon', sans-serif !important;" class="cl5">
                                                <?php echo $km['NgayTao'] ?>
                                            </span>
                                        </span>
                                    </div>

                                    <h4 class="p-b-12">
                                        <a style="font-family: 'Tilt Neon', sans-serif !important;" style="color:#EF0033 !important;" href="index.php?action=detail&id=<?php echo $km['MaKM'] ?>" class="">
                                            <?php echo $km['TenKM'] ?>
                                        </a>
                                    </h4>

                                    <p style="font-family: 'Tilt Neon', sans-serif !important;" class="stext-108 cl6">
                                        <?php echo mb_substr($km["MoTa"], 0, 100) . "..."; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
            <?php

                    }
                endforeach;
            endforeach;

            ?>

        </div>
    </div>
</section>
<style>
    a.mtext:hover,
    a.mtext:focus,
    a.mtext:active {
        color: #EF0033 !important;
    }
</style>