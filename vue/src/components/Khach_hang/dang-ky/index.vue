<template>

    <div class="wrapper">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
            integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
            <div class="container-fluid">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                    <div class="col mx-auto">
                        <div class="mb-4 text-center">
                            <img src="../../../assets/images/logo-img.png" width="180" alt="" />
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="border p-4 rounded">
                                    <div class="text-center">
                                        <h3 class=""> Đăng Ký Thành Viên</h3>

                                    </div>

                                    <div class="d-grid">
                                        <a class="btn my-4 shadow-sm btn-white" href="javascript:;"> <span
                                                class="d-flex justify-content-center align-items-center">
                                                <img src="../../../assets/img/20191216072350tuyen-dung-giam-sat-thi-congntOC.jpg" alt="" style="width: 400px;">
                                                
                                            </span>
                                        </a> 
                                    </div>
                                    <hr>
                                    <div class="form-body">
                                        <form class="row g-3">
                                            <div class="col-12">
                                                <label for="">👨‍💻 Họ Và Tên</label>
                                                <input type="text" class="form-control" id="inputEmailAddress"
                                                    placeholder="nhập họ và tên của bạn">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">📧 Email
                                                    Address</label>
                                                <input type="email" class="form-control" id="inputEmailAddress"
                                                    placeholder="Email">
                                            </div>
                                            <div class="col-12">
                                                <label for="">📱 Số Điện Thoại:</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Nhập Số Điện Thoại">
                                            </div>
                                            <div class="col-12">
                                                <label for="">🎂 Ngày Sinh:</label>
                                                <input type="date" class="form-control">
                                            </div>
                                            <div class="col-12">
                                                <label for="">🔑 Mật Khẩu:</label>
                                                <input type="text" class="form-control" placeholder="Nhập Mật Khẩu">
                                            </div>
                                            <div class="col-12">
                                                <label for="">⏳ Xác Nhận Mật Khẩu:</label>
                                                <input type="text" class="form-control" placeholder="Xác Nhận Mật Khẩu">
                                            </div>

                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-success">Đăng Ký</button>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary">Quay Trở Lại</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>
<script>

export default {
    
}
</script>
<style></style>