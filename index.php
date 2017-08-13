<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <title>SimpleQuery</title>
</head>

<body>
    <!-- Modal -->
    <div class="modal fade" id="result" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">查询结果</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-dismissable alert-info">
                        <h3>查询结果是：</h3><br/>
                        <h2 align='center' id="fin"></h2>
                        <br/><br/>
                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal">我知道了</button>
                </div>
            </div>
        </div>


    </div>
    </div>
    </br>
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <div class="jumbotron">

                    <h2 align="center">SimpleQuery<span class="badge badge-info">0.8.13</span></h2>
                    </br>

                    <div class="alert alert-warning" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h3 align='center' style="font-weight:bold">
                            注意!
                        </h3>
                        <strong> 欢迎使用SimpleQuery!</strong>
                        </br><a href="https://github.com/gafergit/simplequery" class="alert-link">View On Github</a>
                    </div>
                    <hr class="my-4">
                    <form role="form" method="post">
                        <div class="form-group">
                            <label for="input">输入查询条件</label>
                            <input type="text" class="form-control is-invalid" id="input" required/>
                        </div>
                    <hr class="my-4">
                    <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#result" onclick="query()">查询</button>
                    <button type="button" class="btn btn-warning btn-lg btn-block" onclick="git()">View On Github</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
