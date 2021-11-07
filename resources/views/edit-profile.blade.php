@extends('layout.layout')

<style>
    .update .card{
    width: 80%;
    height: 80vh;
    margin: auto;
}
form{
    margin: auto;
}
</style>

@section('main')
<section class="update">
<div class="card p-5">
    <form action="">
        <h4>Update Profile</h4>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6 p-1">
                    <input type="text" value="{ firstname }" class="form-control">
                </div>
                <div class="col-md-6 p-1">
                    <input type="text" value="{ username }" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6 p-1">
                    <input type="text" value="{ middlename }" class="form-control">
                </div>
                <div class="col-md-6 p-1">
                    <input type="text" value="{ lastname }" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6 p-1">
                    <input type="text" value="{ email }" class="form-control">
                </div>
                <div class="col-md-6 p-1">
                    <select name="gender" id="" class="form-control">
                        <option hidden>Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-4 p-1">
                    <select name="gender" id="" class="form-control">
                        <option hidden>Select Day</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                </div>
                <div class="col-md-4 p-1">
                    <select name="gender" id="" class="form-control">
                        <option hidden>Select Month</option>
                        <option value="jan">Jan</option>
                        <option value="feb">Feb</option>
                        <option value="mar">Mar</option>
                        <option value="april">April</option>
                        <option value="may">May</option>
                        <option value="jun">Jun</option>
                        <option value="jul">Jul</option>
                        <option value="aug">Aug</option>
                        <option value="sept">Sept</option>
                        <option value="oct">Oct</option>
                        <option value="nov">Nov</option>
                        <option value="dec">Dec</option>
                    </select>
                </div>
                <div class="col-md-4 p-1">
                    <select name="gender" id="" class="form-control">
                        <option hidden>Select Year</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                        <option value="2003">2003</option>
                        <option value="2004">2004</option>
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                        <option value="2007">2007</option>
                        <option value="2008">2008</option>
                        <option value="2009">2009</option>
                        <option value="2010">2010</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Update</button>
        </div>
    </form>
</div>
</section>
@endsection
