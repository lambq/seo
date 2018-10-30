@extends('layouts.web')

@section('title', '网站SEO综合查询-百度权重排名查询-网站价值评估查询-站长工具')
@section('keywords', '网站SEO综合查询,网站价值评估查询,儒尚秀站网,SEO综合查询,网站综合查询,网站收录查询,域名信息查询,网站优化')
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
                                <input type="text" id="url" name="title" autocomplete="off" placeholder="例如 www.webshowu.com" class="layui-input">
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
        <div class="layui-col-md12">
            <div class="layui-card">
                <div class="layui-card-header">工具介绍</div>
                <div class="layui-card-body">
                    主要功能：<br>
                    网站信息查询 : 网站标题关键词以及描述、状态码、网站备案信息<br>
                    搜索优化查询 : 百度收录、搜狗收录、Google收录、网站反链、权重查询、PageRank值<br>
                    域名/IP类查询：域名WHOIS查询 域名删除时间 IP信息查询，网址安全查询、机房位置查询、Alexa排名<br>
                    功能不断完善中。<br>
                </div>
            </div>
        </div>
    </div>
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
    <div class="layui-row">
        <div class="layui-card">
            <div class="layui-card-header">友情链接</div>
            <div class="layui-card-body">
                <a href="https://www.webshowu.com" target="_blank" title="秀站网">秀站网</a>
            </div>
        </div>
    </div>

@endsection

@section('layui')
<script>
    layui.use(['layer','jquery'], function(){
        var layer = layui.layer ,$ = layui.jquery;

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
    });
</script>
@endsection