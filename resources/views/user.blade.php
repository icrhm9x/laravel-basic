@extends('master.master')
@section('title','Quản lý thành viên')
@section('content')
    <article class="content dashboard-page">
        <section class="section">
            <div class="row sameheight-container">
                <div class="col-xl-12">
                    <div class="card sameheight-item items" data-exclude="xs,sm,lg">
                        <form action="" method="post">
                            <div class="card-header bordered">
                                <div class="header-block">
                                    <h3 class="title"> Danh sách thành viên </h3>
                                    <a href="/user/add" class="btn btn-primary btn-sm"> Thêm </a>
                                </div>
                                <div class="header-block pull-right">
                                    <label class="search">
                                        <input class="search-input" name="search" placeholder="search...">
                                        <i class="fa fa-search search-icon"></i>
                                    </label>
                                    <div class="pagination">
                                        <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <ul class="item-list striped">
                            <li class="item item-list-header">
                                <div class="item-row">

                                    <div class="item-col item-col-header ">

                                        <span>Họ Tên</span>

                                    </div>
                                    <div class="item-col item-col-header">

                                        <span>Số điện thoại</span>

                                    </div>
                                    <div class="item-col item-col-header ">

                                        <span>Địa chỉ</span>

                                    </div>
                                    <div class="item-col item-col-header ">

                                        <span>Số CMT</span>

                                    </div>
                                    <div class="item-col item-col-header">

                                        <span>Xoá</span>

                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="item-row">
                                    <div class="item-col">
                                        <a href="edit_user.html">
                                            Nguyễn Thế phúc
                                        </a>
                                    </div>
                                    <div class="item-col">
                                        0356333333
                                    </div>
                                    <div class="item-col">
                                        <span title="Dũng Tiến-Thường tín-Hà Nội">Dũng Tiến-Thường tín...</span>
                                    </div>
                                    <div class="item-col">
                                        017478331
                                    </div>
                                    <div class="item-col ">
                                        <a href="#" class="btn btn-danger-outline">Xoá</a>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="item-row">
                                    <div class="item-col">
                                        <a  href="edit_user.html">
                                            Nguyễn đình trung
                                        </a>
                                    </div>
                                    <div class="item-col">
                                        0321555422
                                    </div>
                                    <div class="item-col">
                                        <span title="Quán Gánh-Thường tín-Hà Nội">Quán Gánh-Thường tín...</span>
                                    </div>
                                    <div class="item-col">
                                        017653224
                                    </div>
                                    <div class="item-col ">
                                            <a href="#" class="btn btn-danger-outline">Xoá</a>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="item-row">
                                    <div class="item-col">
                                        <a  href="edit_user.html">
                                            Nguyễn Văn Ninh
                                        </a>
                                    </div>
                                    <div class="item-col">
                                        0152354421
                                    </div>
                                    <div class="item-col">
                                        <span title="Dũng Tiến-Thường tín-Hà Nội">Từ sơn-Bắc ninh - Hà
                                            N...</span>
                                    </div>
                                    <div class="item-col">
                                        017658847
                                    </div>
                                    <div class="item-col ">
                                        <a href="#" class="btn btn-danger-outline">Xoá</a>
                                    </div>
                                </div>
                            </li>

                        </ul>

                    </div>

                </div>

            </div>

            <div align='right'>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#"><</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">></a></li>
                    </ul>
                </nav>
            </div>

        </section>

    </article>
@endsection
@section('script')
@parent
{{-- <script> code js cho từng trang ở đây</script> --}}
@endsection
