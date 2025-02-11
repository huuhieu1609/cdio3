<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mt-2"><b>Tạo Bảng Việc Làm</b></h5>
                    </div>
                    <div class="card-body">
                        <label class="mb-0">Họ Và Tên</label>
                        <input v-model="bang.ho_va_ten" type="text" class="form-control">
                        <label class="mb-0 mt-2">Công Ty</label>
                        <input v-model="bang.cong_ty" type="text" class="form-control">
                        <label class="mb-0 mt-2">Công Việc</label>
                        <select v-model="bang.cong_viec" class="form-select" aria-label="Default select example"
                            style="height: 45px;">
                            <option selected>Chọn Công Việc</option>
                            <option value="1">An Ninh/Bảo Vệ</option>
                            <option value="2">An Toàn Lao Động</option>
                            <option value="3">Bán Hàng/Kinh Doanh</option>
                            <option value="4">Bán Lẻ/Bán Sỉ</option>
                            <option value="5">Bảo Hiểm</option>
                            <option value="6">Công Nghệ Thông Tin</option>
                            <option value="7">Giáo Dục/Đào Tạo</option>
                            <option value="8">Kế Toán/Kiểm Toán</option>
                            <option value="9">Kiến Trúc/Thiết Kế</option>
                            <option value="10">Marketing/Truyền Thông</option>
                            <option value="11">Ngân Hàng/Tài Chính</option>
                            <option value="12">Nhân Sự</option>
                            <option value="13">Sản Xuất/Cơ Khí</option>
                            <option value="14">Vận Tải/Kho Vận</option>
                            <option value="15">Y Tế/Chăm Sóc Sức Khỏe</option>
                        </select>
                        <label class="mb-0 mt-2">Mức Lương</label>
                        <select v-model="bang.muc_luong" class="form-select" aria-label="Default select example"
                            style="height: 45px;">
                            <option selected>Chọn Mức Lương</option>
                            <option value="1">3.000.000 đ</option>
                            <option value="2">5.000.000 đ</option>
                            <option value="3">7.000.000 đ</option>
                            <option value="4">10.000.000 đ</option>
                            <option value="5">15.000.000 đ</option>
                            <option value="6">20.000.000 đ</option>
                            <option value="7">30.000.000 đ</option>
                            <option value="8">40.000.000 đ</option>
                            <option value="9">50.000.000 đ</option>
                            <option value="10">60.000.000 đ</option>
                            <option value="11">70.000.000 đ</option>
                        </select>
                        <label class="mb-0 mt-2">Địa Điểm</label>
                        <select v-model="bang.dia_diem" class="form-select" aria-label="Default select example"
                            style="height: 45px;">
                            <option selected>Chọn Địa Điểm</option>
                            <option value="1">Hà Giang</option>
                            <option value="2">Cao Bằng</option>
                            <option value="3">Bắc Kạn</option>
                            <option value="4">Tuyên Quang</option>
                            <option value="5">Lào Cai</option>
                            <option value="6">Yên Bái</option>
                            <option value="7">Thái Nguyên</option>
                            <option value="8">Lạng Sơn</option>
                            <option value="9">Phú Thọ</option>
                            <option value="10">Bắc Giang</option>
                            <option value="11">Quảng Ninh</option>
                            <option value="12">Hà Nội</option>
                            <option value="13">Vĩnh Phúc</option>
                            <option value="14">Bắc Ninh</option>
                            <option value="15">Hải Dương</option>
                            <option value="16">Hưng Yên</option>
                            <option value="17">Hà Nam</option>
                            <option value="18">Nam Định</option>
                            <option value="19">Thái Bình</option>
                            <option value="20">Hải Phòng</option>
                            <option value="21">Hòa Bình</option>
                            <option value="22">Sơn La</option>
                            <option value="23">Điện Biên</option>
                            <option value="24">Lai Châu</option>
                            <option value="25">Thanh Hóa</option>
                            <option value="26">Nghệ An</option>
                            <option value="27">Hà Tĩnh</option>
                            <option value="28">Quảng Bình</option>
                            <option value="29">Quảng Trị</option>
                            <option value="30">Thừa Thiên Huế</option>
                            <option value="31">Đà Nẵng</option>
                            <option value="32">Quảng Nam</option>
                            <option value="33">Quảng Ngãi</option>
                            <option value="34">Bình Định</option>
                            <option value="35">Phú Yên</option>
                            <option value="36">Khánh Hòa</option>
                            <option value="37">Ninh Thuận</option>
                            <option value="38">Bình Thuận</option>
                            <option value="39">Kon Tum</option>
                            <option value="40">Gia Lai</option>
                            <option value="41">Đắk Lắk</option>
                            <option value="42">Đắk Nông</option>
                            <option value="43">Lâm Đồng</option>
                            <option value="44">TP Hồ Chí Minh</option>
                            <option value="45">Bà Rịa - Vũng Tàu</option>
                            <option value="46">Bình Dương</option>
                            <option value="47">Bình Phước</option>
                            <option value="48">Đồng Nai</option>
                            <option value="49">Tây Ninh</option>
                            <option value="50">Long An</option>
                            <option value="51">Đồng Tháp</option>
                            <option value="52">Tiền Giang</option>
                            <option value="53">An Giang</option>
                            <option value="54">Bến Tre</option>
                            <option value="55">Vĩnh Long</option>
                            <option value="56">Trà Vinh</option>
                            <option value="57">Cần Thơ</option>
                            <option value="58">Hậu Giang</option>
                            <option value="59">Sóc Trăng</option>
                            <option value="60">Bạc Liêu</option>
                            <option value="61">Cà Mau</option>
                        </select>
                        <label class="mb-0 mt-2">Ngày Tạo</label>
                        <input v-model="bang.ngay_tao" type="text" class="form-control" readonly>
                        <label class="mb-0 mt-2">Hạn Nộp</label>
                        <input v-model="bang.han_nop" type="date" class="form-control">
                        <label class="mb-0 mt-2">Kinh Nghiệm</label>
                        <select v-model="bang.kinh_nghiem" class="form-select" aria-label="Default select example"
                            style="height: 45px;">
                            <option selected>Chọn Kinh Nghiệm</option>
                            <option value="1">Không Yêu Cầu Kinh Nghiệm</option>
                            <option value="2">Chưa Có Kih Nghiệm</option>
                            <option value="3">Đến Dưới 1 Năm</option>
                            <option value="4">Từ 1 - 4 Năm</option>
                            <option value="5">Từ 5 - 7 Năm</option>
                            <option value="6">Từ 7 - 10 Năm</option>
                            <option value="7">Từ 11 Năm</option>
                        </select>
                        <label class="mb-0 mt-2">Cấp Bậc</label>
                        <select v-model="bang.cap_bac" class="form-select" aria-label="Default select example"
                            style="height: 45px;">
                            <option selected>Chọn Cấp Bậc</option>
                            <option value="1">Sinh viên/ Thực tập sinh</option>
                            <option value="2">Mới tốt nghiệp</option>
                            <option value="3">Nhân viên</option>
                            <option value="4">Trưởng nhóm/Giám sát</option>
                            <option value="5">Quản Lý</option>
                            <option value="6">Quản Lý Cấp Cao</option>
                            <option value="7">Điều Hành Cấp Cao</option>
                        </select>
                    </div>
                    <div class="card-footer text-end">
                        <button v-on:click="addvieclam()" class="btn btn-primary">Thêm Mới</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mt-2"><b>Danh Sách Việc Làm</b></h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr class="text-nowrap text-center align-middle">
                                        <th>#</th>
                                        <th>Họ Và Tên</th>
                                        <th>Công Ty</th>
                                        <th>Công Việc</th>
                                        <th>Mức Lương</th>
                                        <th>Địa Điểm</th>
                                        <th>Ngày Tạo</th>
                                        <th>Hạn Nộp</th>
                                        <th>Kinh Nghiệm</th>
                                        <th>Cấp Bậc</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <template v-for="(value, index) in list_job" :key="index">
                                        <tr class="text-nowrap align-middle">
                                            <td>{{ index + 1 }}</td>
                                            <td>{{ value.ho_va_ten }}</td>
                                            <td>{{ value.cong_ty }}</td>
                                            <td>
                                                <p v-if="value.cong_viec == 1">An Ninh/Bảo Vệ</p>
                                                <p v-if="value.cong_viec == 2">An Toàn Lao Động</p>
                                                <p v-if="value.cong_viec == 3">Bán Hàng/Kinh Doanh</p>
                                                <p v-if="value.cong_viec == 4">Bán Lẻ/Bán Sỉ</p>
                                                <p v-if="value.cong_viec == 5">Bảo Hiểm</p>
                                                <p v-if="value.cong_viec == 6">Công Nghệ Thông Tin</p>
                                                <p v-if="value.cong_viec == 7">Giáo Dục/Đào Tạo</p>
                                                <p v-if="value.cong_viec == 8">Kế Toán/Kiểm Toán</p>
                                                <p v-if="value.cong_viec == 9">Kiến Trúc/Thiết Kế</p>
                                                <p v-if="value.cong_viec == 10">Marketing/Truyền Thông</p>
                                                <p v-if="value.cong_viec == 11">Ngân Hàng/Tài Chính</p>
                                                <p v-if="value.cong_viec == 12">Nhân Sự</p>
                                                <p v-if="value.cong_viec == 13">Sản Xuất/Cơ Khí</p>
                                                <p v-if="value.cong_viec == 14">Vận Tải/Kho Vận</p>
                                                <p v-if="value.cong_viec == 15">Y Tế/Chăm Sóc Sức Khỏe</p>
                                            </td>
                                            <td>
                                                <p v-if="value.muc_luong == 1">3.000.000 đ</p>
                                                <p v-if="value.muc_luong == 2">5.000.000 đ</p>
                                                <p v-if="value.muc_luong == 3">7.000.000 đ</p>
                                                <p v-if="value.muc_luong == 4">10.000.000 đ</p>
                                                <p v-if="value.muc_luong == 5">15.000.000 đ</p>
                                                <p v-if="value.muc_luong == 6">20.000.000 đ</p>
                                                <p v-if="value.muc_luong == 7">30.000.000 đ</p>
                                                <p v-if="value.muc_luong == 8">40.000.000 đ</p>
                                                <p v-if="value.muc_luong == 9">50.000.000 đ</p>
                                                <p v-if="value.muc_luong == 10">60.000.000 đ</p>
                                                <p v-if="value.muc_luong == 11">70.000.000 đ</p>
                                            </td>
                                            <td>
                                                <p v-if="value.dia_diem == 1">Hà Giang</p>
                                                <p v-if="value.dia_diem == 2">Cao Bằng</p>
                                                <p v-if="value.dia_diem == 3">Bắc Kạn</p>
                                                <p v-if="value.dia_diem == 4">Tuyên Quang</p>
                                                <p v-if="value.dia_diem == 5">Lào Cai</p>
                                                <p v-if="value.dia_diem == 6">Yên Bái</p>
                                                <p v-if="value.dia_diem == 7">Thái Nguyên</p>
                                                <p v-if="value.dia_diem == 8">Lạng Sơn</p>
                                                <p v-if="value.dia_diem == 9">Phú Thọ</p>
                                                <p v-if="value.dia_diem == 10">Bắc Giang</p>
                                                <p v-if="value.dia_diem == 11">Quảng Ninh</p>
                                                <p v-if="value.dia_diem == 12">Hà Nội</p>
                                                <p v-if="value.dia_diem == 13">Vĩnh Phúc</p>
                                                <p v-if="value.dia_diem == 14">Bắc Ninh</p>
                                                <p v-if="value.dia_diem == 15">Hải Dương</p>
                                                <p v-if="value.dia_diem == 16">Hưng Yên</p>
                                                <p v-if="value.dia_diem == 17">Hà Nam</p>
                                                <p v-if="value.dia_diem == 18">Nam Định</p>
                                                <p v-if="value.dia_diem == 19">Thái Bình</p>
                                                <p v-if="value.dia_diem == 20">Hải Phòng</p>
                                                <p v-if="value.dia_diem == 21">Hòa Bình</p>
                                                <p v-if="value.dia_diem == 22">Sơn La</p>
                                                <p v-if="value.dia_diem == 23">Điện Biên</p>
                                                <p v-if="value.dia_diem == 24">Lai Châu</p>
                                                <p v-if="value.dia_diem == 25">Thanh Hóa</p>
                                                <p v-if="value.dia_diem == 26">Nghệ An</p>
                                                <p v-if="value.dia_diem == 27">Hà Tĩnh</p>
                                                <p v-if="value.dia_diem == 28">Quảng Bình</p>
                                                <p v-if="value.dia_diem == 29">Quảng Trị</p>
                                                <p v-if="value.dia_diem == 30">Thừa Thiên Huế</p>
                                                <p v-if="value.dia_diem == 31">Đà Nẵng</p>
                                                <p v-if="value.dia_diem == 32">Quảng Nam</p>
                                                <p v-if="value.dia_diem == 33">Quảng Ngãi</p>
                                                <p v-if="value.dia_diem == 34">Bình Định</p>
                                                <p v-if="value.dia_diem == 35">Phú Yên</p>
                                                <p v-if="value.dia_diem == 36">Khánh Hòa</p>
                                                <p v-if="value.dia_diem == 37">Ninh Thuận</p>
                                                <p v-if="value.dia_diem == 38">Bình Thuận</p>
                                                <p v-if="value.dia_diem == 39">Kon Tum</p>
                                                <p v-if="value.dia_diem == 40">Gia Lai</p>
                                                <p v-if="value.dia_diem == 41">Đắk Lắk</p>
                                                <p v-if="value.dia_diem == 42">Đắk Nông</p>
                                                <p v-if="value.dia_diem == 43">Lâm Đồng</p>
                                                <p v-if="value.dia_diem == 44">TP Hồ Chí Minh</p>
                                                <p v-if="value.dia_diem == 45">Bà Rịa - Vũng Tàu</p>
                                                <p v-if="value.dia_diem == 46">Bình Dương</p>
                                                <p v-if="value.dia_diem == 47">Bình Phước</p>
                                                <p v-if="value.dia_diem == 48">Đồng Nai</p>
                                                <p v-if="value.dia_diem == 49">Tây Ninh</p>
                                                <p v-if="value.dia_diem == 50">Long An</p>
                                                <p v-if="value.dia_diem == 51">Đồng Tháp</p>
                                                <p v-if="value.dia_diem == 52">Tiền Giang</p>
                                                <p v-if="value.dia_diem == 53">An Giang</p>
                                                <p v-if="value.dia_diem == 54">Bến Tre</p>
                                                <p v-if="value.dia_diem == 55">Vĩnh Long</p>
                                                <p v-if="value.dia_diem == 56">Trà Vinh</p>
                                                <p v-if="value.dia_diem == 57">Cần Thơ</p>
                                                <p v-if="value.dia_diem == 58">Hậu Giang</p>
                                                <p v-if="value.dia_diem == 59">Sóc Trăng</p>
                                                <p v-if="value.dia_diem == 60">Bạc Liêu</p>
                                                <p v-if="value.dia_diem == 61">Cà Mau</p>
                                            </td>
                                            <td>{{ value.ngay_tao }}</td>
                                            <td>{{ value.han_nop }}</td>
                                            <td>
                                                <p v-if="value.muc_luong == 1">Không Yêu Cầu Kinh Nghiệm</p>
                                                <p v-if="value.muc_luong == 2">Chưa Có Kih Nghiệm</p>
                                                <p v-if="value.muc_luong == 3">Đến Dưới 1 Năm</p>
                                                <p v-if="value.muc_luong == 4">Từ 1 - 4 Năm</p>
                                                <p v-if="value.muc_luong == 5">Từ 5 - 7 Năm</p>
                                                <p v-if="value.muc_luong == 6">Từ 7 - 10 Năm</p>
                                                <p v-if="value.muc_luong == 7">Từ 11 Năm</p>
                                            </td>
                                            <td>
                                                <p v-if="value.cap_bac == 1">Sinh viên/ Thực tập sinh</p>
                                                <p v-if="value.cap_bac == 2">Mới tốt nghiệp</p>
                                                <p v-if="value.cap_bac == 3">Nhân viên</p>
                                                <p v-if="value.cap_bac == 4">Trưởng nhóm/Giám sát</p>
                                                <p v-if="value.cap_bac == 5">Quản Lý</p>
                                                <p v-if="value.cap_bac == 6">Quản Lý Cấp Cao</p>
                                                <p v-if="value.cap_bac == 7">Điều Hành Cấp Cao</p>
                                            </td>
                                            <td>
                                                <button class="btn btn-primary me-2">Cập Nhật</button>
                                                <button class="btn btn-danger">Xoá</button>
                                            </td>
                                        </tr>
                                    </template>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';

export default {
    data() {
        const currentDate = new Date();
        const day = String(currentDate.getDate()).padStart(2, '0');
        const month = String(currentDate.getMonth() + 1).padStart(2, '0');
        const year = currentDate.getFullYear();
        return {
            list_job: [],
            bang: {
                ho_va_ten: '',
                cong_ty: '',
                cong_viec: '',
                muc_luong: '',
                dia_diem: '',
                ngay_tao: `${year}/${month}/${day}`,
                han_nop: '',
                kinh_nghiem: '',
                cap_bac: '',
            },
            edit: {
                ho_va_ten: '',
                cong_ty: '',
                cong_viec: '',
                muc_luong: '',
                dia_diem: '',
                ngay_tao: '',
                han_nop: '',
                kinh_nghiem: '',
                cap_bac: '',
            },
            delete_vieclam: {
                ho_va_ten: '',
                cong_ty: '',
                cong_viec: '',
                muc_luong: '',
                dia_diem: '',
                ngay_tao: '',
                han_nop: '',
                kinh_nghiem: '',
                cap_bac: '',
            },

        };
    },
    mounted() {
        this.laydata();
    },
    methods: {
        laydata() {
            axios
                .get('http://127.0.0.1:8000/api/viec-lam')
                .then(res => {
                    this.list_job = res.data.data;
                })
                .catch(error => {
                    console.log(error);
                });
        },
        addvieclam() {
            axios
                .post("http://127.0.0.1:8000/api/add-viec-lam", this.bang)
                .then((response) => {
                    if (response.data.status == true) {
                        // alert(response.data.message);
                        this.$toast.info(response.data.message);
                        this.laydata();
                    } else {
                        // alert("Thêm mới thất bại");
                        this.$toast.error("Thêm Mới Thất Bại");
                    }
                })
                .catch((error) => {
                    // Dữ liệu mà server trả về khi bị lỗi
                    var obj = error.response.data.errors;
                    var result = Object.keys(obj).map((key) => [key, obj[key]]);
                    result.forEach((value_1, key_1) => {
                        var xxx = value_1[1];
                        xxx.forEach((value, key) => {
                            // console.log(value);
                            this.$toast.error(value);
                        });
                    });
                });
        },
        editvieclam() {
            axios
                .post("http://127.0.0.1:8000/api/edit-viec-lam", this.edit)
                .then((response) => {
                    if (response.data.status == true) {
                        // alert(response.data.message);
                        this.$toast.info(response.data.message);
                        this.laydata();
                    } else {
                        // alert("Thêm mới thất bại");
                        this.$toast.error("Xoá Thất Bại");
                    }
                })
                .catch((error) => {
                    // Dữ liệu mà server trả về khi bị lỗi
                    var obj = error.response.data.errors;
                    var result = Object.keys(obj).map((key) => [key, obj[key]]);
                    result.forEach((value_1, key_1) => {
                        var xxx = value_1[1];
                        xxx.forEach((value, key) => {
                            // console.log(value);
                            this.$toast.error(value);
                        });
                    });
                });
        },
        deletevieclam() {
            axios
                .post("http://127.0.0.1:8000/api/delete-viec-lam", this.delete_vieclam)
                .then((response) => {
                    if (response.data.status == true) {
                        // alert(response.data.message);
                        this.$toast.info(response.data.message);
                        this.laydata();
                    } else {
                        // alert("Thêm mới thất bại");
                        this.$toast.error("Xoá Thất Bại");
                    }
                })
                .catch((error) => {
                    // Dữ liệu mà server trả về khi bị lỗi
                    var obj = error.response.data.errors;
                    var result = Object.keys(obj).map((key) => [key, obj[key]]);
                    result.forEach((value_1, key_1) => {
                        var xxx = value_1[1];
                        xxx.forEach((value, key) => {
                            // console.log(value);
                            this.$toast.error(value);
                        });
                    });
                });
        },
    },

};
</script>
<style></style>