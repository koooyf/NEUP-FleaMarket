@include('includes.head')
<title>先锋市场</title>
<style>
    h5 {
        color: #ffffff;
    }
</style>
</head>
<body>
@include('layout.header')
<div class="page-content">
    <div class="row">
        <h5>商品列表</h5>
        <table class="table">
            <tr>
                <td>#</td>
                <td>商品名称</td>
                <td>最低价格</td>
                <td>最高价格</td>
            </tr>
            @foreach($goods as $good)
                <tr>
                    <td>{{ $good->id }}</td>
                    <td><a href="/good/{{$good->id}}">{{ $good->good_name }}</a></td>
                    <td>{{ $good->pricemin }}</td>
                    <td>{{ $good->pricemax }}</td>
                </tr>
            @endforeach
        </table>
        <a href="/good/add" class="button">添加商品</a>
    </div>
</div>
@include('layout.footer')
@include('includes.foot')
