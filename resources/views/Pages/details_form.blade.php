@extends('Inc.layout')
@section('page_title')
{{config('app.name')}}  
@endsection
@include('Inc.nav')
@section('content')
<style>
    .left{
        float: left;
    }
    .right{
        float: right;
    }
    ul li{
        display: inline;
        list-style: none;
    }
     .jumbotron.jumbotron-fluid { 
      margin-bottom: 0;
      margin-top: 0; 
      padding-top: 100px;
      padding-bottom: 100px;
        background:linear-gradient(rgba(12, 12, 12, 0.712),rgba(18, 18, 19, 0.685)), url('Img/bg.jfif') no-repeat;
        color: antiquewhite;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }
    .container.form{
        padding-top: 50px;
    }
form label,
span{
  line-height: 1.5em;
  font-family: 'Roboto', sans-serif;
  font-size: 15px;
  font-weight: bold;
  color: #3f3d56; 

}
label.custom-file-upload{
    font-weight: normal;
  line-height: 1em;
  font-size: 14px;
}
form i{
    color: #ff414a;
}
form input.form-control,
form select.form-control,
form textarea.form-control{
    background: #ffffff;
    padding: 6px 30px;
    border-radius: 30px;
}
form input.form-control:focus,
form textarea.form-control:focus{
   border-color:transparent;
  -webkit-box-shadow: none;
  box-shadow: none;
}
input[type="file"] {
    display: none;
}
.custom-file-upload {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
}
li a{
    color: #dc3546;
    text-decoration: none;
}
.btn.btn-danger{
        background: #dc3546;
        border-radius: 20px;
        padding: 10px 50px;
        border: none;
    }
</style>
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <div class="left">
            <h2>How do you feel?</h2>
            <p>Tell us by filling the form below...</p>
        </div>
        <div class="right">
            <ul>
                <li><a href="./" >Home /</a></li>
                <li class="current">Ads</li>

            </ul>
        </div>

    </div>
</div>
<div class="container form">
    
        @include('Inc.messages')
        <!---If file upload is involved always add enctype to your opening
            form tag and set it to multipart/form-data--->
        <form action="file.php" method="post">
        <div class="form-group" data-aos="fade-right">
                <!--This is the lable for the field. The first parameter is the lable for, while the second is the name it will carry--->
            {{Form::label('name', 'Name')}} <i class="fa fa-check-circle-o" aria-hidden="true"></i>
            <!--This is the input field with type=text, name=title, value='' since it is a text field, then bootstrap class and then placeholder--->
            {{Form::text('name', '', [ 'class' => 'form-control', 'placeholder' => 'e.g Jane','maxlength' => 50,'required' ])}}
        </div>
        <div class="form-group">
                <!--This is the lable for the field. The first parameter is the lable for, while the second is the name it will carry--->
            {{Form::label('gender', 'Gender')}}
            <!--This is the input field with type=text, name=title, value='' since it is a text field, then bootstrap class and then placeholder--->
            {{Form::select('gender', ['Male' => 'Male','Female' => 'Female'], '--Select gender--', ['class' => 'form-control'])}}
        
        </div> 
        <div class="form-group">
                <!--This is the lable for the field. The first parameter is the lable for, while the second is the name it will carry--->
            {{Form::label('age', 'Age')}}
            <!--This is the input field with type=text, name=title, value='' since it is a text field, then bootstrap class and then placeholder--->
            {{Form::number('age', '', [ 'class' => 'form-control', 'placeholder' => 'e.g 1985','maxlength' => 50,'required' ])}}
        
        </div> 
        <div class="form-group" data-aos="fade-right">
                <!--This is the lable for the field. The first parameter is the lable for, while the second is the name it will carry--->
            {{Form::label('symptom', 'Symptom')}} <i class="fa fa-check-circle-o" aria-hidden="true"></i>
            <!--This is the input field with type=text, name=title, value='' since it is a text field, then bootstrap class and then placeholder--->
            {{Form::text('symptom', '', [ 'class' => 'form-control', 'placeholder' => 'e.g headache','maxlength' => 50,'required' ])}}
        </div>
            {{Form::submit('Submit', ['class' => 'btn btn-danger btn-md pull-left', 'data-aos'=> "fade-right"])}}
            {!! Form::close() !!}
        </div>
</div>
@endsection