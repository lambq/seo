@extends('layouts.web')

@section('title', $url.'-网站分类目录提交的SEO综合查询-站长工具')
@section('keywords', 'DMOZ目录,网站收录,网站目录,网站综合查询,分类目录')
@section('description', '站长工具的seo综合查询可以查到该网站各大搜索引擎的信息，包括收录，反链及关键词排名，也可以一目了然的看到该域名的相关信息，比如域名年龄相关备案等等，及时调整网站优化。')

@section('content')
    <div class="layui-row">
        <div class="layui-card">
            <div class="layui-card-header">SEO查询</div>
            <div class="layui-card-body">
                <div class="layui-form-item">
                    <div class="layui-form layui-form-pane">
                        <div class="layui-inline" style="width:75%">
                            <label class="layui-form-label">查询域名</label>
                            <div class="layui-input-block">
                                <input type="text" id="url" name="title" autocomplete="off" placeholder="例如 www.webshowu.com" class="layui-input" value="{{ $url }}">
                            </div>
                        </div>
                        <div class="layui-inline" style="width:15%">
                            <button type="button" class="layui-btn seo">
                                <i class="layui-icon"></i>
                                开始查询
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="layui-row">
        <div class="layui-card meta">
            <div class="layui-card-header">
                网站 {{ $url }} 基本信息
                <button class="layui-btn layui-btn-normal rt" id="meta">刷新</button>
            </div>
            <div class="layui-card-body layui-clear">
                <div class="layui-col-md3">
                    <img class="logo load" src="https://img.webshowu.com/files/loading.gif" lay-src="http://api.webshowu.com/storage/shot/{{ $url }}.jpg" alt="{{ $url }}">
                </div>
                <div class="layui-col-md9">
                    <ul>
                        <li>
                            网站标题: @if($site->title) {{ $site->title }} @else 赶快去您网站设置标题~很影响搜索优化 @endif
                        </li>
                        <li>
                            网站TAG: @if($site->keywords) {{ $site->keywords }} @else  赶快去您网站设置关键词~很影响搜索优化 @endif
                        </li>
                        <li>
                            网站简介: @if($site->description) {{ $site->description }} @else  赶快去您网站设置简介~很影响搜索优化 @endif
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="layui-row">
        <div class="layui-card icp">
            <div class="layui-card-header">
                网站 {{ $url }} 备案信息
                <button class="layui-btn layui-btn-normal rt" id="icp">刷新</button>
            </div>
            <div class="layui-card-body layui-clear">
                @if($site->icp)
                    <ul>
                        <li class="layui-col-md3">
                            <em>单位名称：</em>
                            <a href="#" title="{{ $site->icp['name'] }}">
                                {{ $site->icp['name'] }}
                            </a>
                        </li>
                        <li class="layui-col-md3">
                            <em>单位性质：</em>
                            {{ $site->icp['type'] }}
                        </li>
                        <li class="layui-col-md3">
                            <em>备案号：</em>
                            {{ $site->icp['now_icp'] }}
                        </li>
                        <li class="layui-col-md3">
                            <em>审核时间：</em>
                            {{ $site->icp['check_date'] }}
                        </li>
                    </ul>
                @else
                    <p>
                        请刷新数据
                    </p>
                @endif
            </div>
        </div>
    </div>
    <div class="layui-row">
        <div class="layui-card rank">
            <div class="layui-card-header">
                网站 {{ $url }} 权重信息
                <button class="layui-btn layui-btn-normal rt" id="rank">刷新</button>
            </div>
            <div class="layui-card-body layui-clear">
                @if($site->rank)
                    <ul>
                        <li class="layui-col-xs6 layui-col-md3">
                            <span>
                                <img src="https://statics.qcmlw.com/images/br-bg.png" alt="百度权重">
                                <em class="refresh-br">{{ $site->rank['br'] }}</em>
                            </span>
                            <p>百度权重</p>
                        </li>
                        <li class="layui-col-xs6 layui-col-md3">
                        <span>
                            <img src="https://statics.qcmlw.com/images/mbr-bg.png" alt="百度移动权重">
                            <em class="refresh-mbr">{{ $site->rank['mbr'] }}</em>
                        </span>
                            <p>移动权重</p>
                        </li>
                        <li class="layui-col-xs6 layui-col-md3">
                        <span>
                            <img src="https://statics.qcmlw.com/images/sbr-bg.png" alt="搜狗权重">
                            <em class="refresh-sbr">{{ $site->rank['sbr'] }}</em>
                        </span>
                            <p>搜狗PR</p>
                        </li>
                        <li class="layui-col-xs6 layui-col-md3">
                        <span>
                            <img src="https://statics.qcmlw.com/images/pr-bg.png" alt="Google权重">
                            <em class="refresh-pr">{{ $site->rank['pr'] }}</em>
                        </span>
                            <p>谷歌PR</p>
                        </li>
                    </ul>
                @else
                    <p>
                        请刷新数据
                    </p>
                @endif
            </div>
        </div>
    </div>
    {{--<div class="layui-row">--}}
        {{--<div class="layui-card">--}}
            {{--<div class="layui-card-header">网站 {{ $url }} Alexa信息</div>--}}
            {{--<div class="layui-card-body">--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="layui-row">--}}
        {{--<div class="layui-card">--}}
            {{--<div class="layui-card-header">网站 {{ $url }} 域名信息</div>--}}
            {{--<div class="layui-card-body">--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="layui-row">
        <div class="layui-card">
            <div class="layui-card-header">最新查询</div>
            <div class="layui-card-body">
                @foreach($sites as $v)
                    <a href="{{ url($v->url) }}" title="{{ $v->url }}" target="_blank">{{ $v->url }}</a>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('layui')
<script>
    layui.use(['layer','jquery','flow'], function(){
        var layer = layui.layer ,$ = layui.jquery,flow = layui.flow;
        flow.lazyimg({
            elem: 'img.load'
        });
        $(function(){
            var api_array = @if(isset($api_array)) "{{ $api_array }}"; @else null; @endif;
            if(api_array != null){
                var array = api_array.split(',');
                if(array.length > 0){
                    $.each(array, function(index, action) {
                        var url = "{{ url('/') }}/"+action+"/"+'{{ $url }}';
                        console.log(url);
                        $.ajax({
                            type: "GET",
                            async:false,
                            url: url,
                            dataType: "json",
                            cache: false,
                            beforeSend: function () {
                                layer.load();
                            },
                            success: function(str){
                                layer.closeAll();
                                layer.msg(str.msg);
                            },
                            error: function (str) {
                                layer.closeAll();
                                layer.msg('请您稍后从新操作……');
                            }
                        });
                    });
                    setTimeout(function(){
                        window.location.reload();//刷新当前页面.
                    },3000)
                }
            }
        });
        $(".seo").on("click", function(){
            var host = $('#url').val();
            if(host==''){
                layui.use('layer', function(){
                    var layer = layui.layer;
                    layer.msg('请填写域名');
                });
                return false;
            }
            if(host=='favicon.ico'){
                layui.use('layer', function(){
                    var layer = layui.layer;
                    layer.msg('请填写正确的域名');
                });
                return false;
            }
            var host_txt = host.replace(/^(\w+:\/\/)/i,'');
            window.location.href='/'+host_txt;
        });
        $("#meta").on("click", function(){
            $.ajax({
                type: "GET",
                async:false,
                url: "{{ url('/') }}/meta/{{ $url }}",
                dataType: "json",
                cache: false,
                beforeSend: function () {
                    layer.load();
                },
                success: function(str){
                    layer.closeAll();
                    layer.msg(str.msg);
                    if(str.code == 0){
                        setTimeout(function(){
                            window.location.reload();//刷新当前页面.
                        },3000)
                    }
                },
                error: function (str) {
                    layer.closeAll();
                    layer.msg('请您稍后从新操作……');
                }
            });
        });
        $("#icp").on("click", function(){
            $.ajax({
                type: "GET",
                async:false,
                url: "{{ url('/') }}/icp/{{ $url }}",
                dataType: "json",
                cache: false,
                beforeSend: function () {
                    layer.load();
                },
                success: function(str){
                    layer.closeAll();
                    layer.msg(str.msg);
                    if(str.code == 0){
                        setTimeout(function(){
                            window.location.reload();//刷新当前页面.
                        },3000)
                    }
                },
                error: function (str) {
                    layer.closeAll();
                    layer.msg('请您稍后从新操作……');
                }
            });
        });
        $("#rank").on("click", function(){
            $.ajax({
                type: "GET",
                async:false,
                url: "{{ url('/') }}/rank/{{ $url }}",
                dataType: "json",
                cache: false,
                beforeSend: function () {
                    layer.load();
                },
                success: function(str){
                    layer.closeAll();
                    layer.msg(str.msg);
                    if(str.code == 0){
                        setTimeout(function(){
                            window.location.reload();//刷新当前页面.
                        },3000)
                    }
                },
                error: function (str) {
                    layer.closeAll();
                    layer.msg('请您稍后从新操作……');
                }
            });
        });
    });
</script>
@endsection