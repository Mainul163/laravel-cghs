<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
    p.card_info {
        font-size: 18px;
        font-weight: bold;
    }

    p.card_info span {
        font-weight: normal;
    }

    a.btn.dy_btn {
        position: absolute;
        right: 10px;
        top: 10px;
    }

    @media only screen and (min-width: 768px) {
        .mobil_redesing {
            display: none;
        }

    }

    @media only screen and (max-width: 767px) {
        .display_deisgn {
            display: none;
        }

        .mobil_redesing {
            display: block;
        }
    }
    </style>

























    
</head>

<body class="profile_main">



    @foreach($graduatedData as $row)
    






    <div class="pdf_main_wrap">
        <div class="top_header">
            <img src="{{'data:image/png;base64,'.base64_encode(file_get_contents(public_path('logo/'.'CGHS.png')))}}" width='170px' height='auto' alt='image'
                class=" border rounded"  width="100" height="100"/>
                
            <h3>Registration Letter</h3>
        </div>
        <div class="pdf_Reg_info">
            <div class="reg_tbl_info">
                <table class="reg_table">                                    
                    <tbody>
                    <tr>
                        <th>Program Date</th>
                        <td >1st July 2023</td>
                    </tr>
                    <tr>
                        <th>Program Time</th>
                        <td>9am - 6pm</td>     
                    </tr>
                    <tr>
                        <th>Program Vanue</th>
                        <td>Dhaka, Banani</td>     
                    </tr>
                    <tr>
                        <th>Regestration Id</th>
                        <td>{{$row->id}}</td>     
                    </tr>
                    <tr>
                        <th>Graduated Name</th>
                        <td>{{$row->graduated_name}}</td>     
                    </tr>
                    <tr>
                        <th>Mobile Number</th>
                        <td>{{$row->mobile_number}}</td>     
                    </tr>
                    <tr>
                        <th>Guest Number</th>
                        <td>{{$row->guest}}</td>     
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="reg_ings_section">
                <img src="{{'data:image/png;base64,'.base64_encode(file_get_contents(public_path('logo/'.'br.webp')))}}" width='100%' height='50px' alt='image'
                class=" border rounded" />
                <br><br>
                <img src="{{'data:image/png;base64,'.base64_encode(file_get_contents(public_path('images/'.$row->img)))}}"" width='100%' height='200px' alt='image'
                class=" border rounded" />
            </div>
            
        </div>
        <div class="graduatred_info">
            <table class="table_btm">                                    
                <tbody>
                    <tr>
                        <th>Profession</th>
                        <td>{{$row->profession}}</td>     
                    </tr>
                    <tr>
                        <th>Profession Institute</th>
                        <td>{{$row->profession_institute}}</td>     
                    </tr>
                    <tr>
                        <th>Designation</th>
                        <td>{{$row->designation}}</td>     
                    </tr>
                    <tr>
                        <th>Persent Address</th>
                        <td>Dhaka, Uttara</td>     
                    </tr>
                    <tr>
                        <th>T-Shirt Size</th>
                        <td>{{$row->t_shirt}}</td>     
                    </tr>
                    <tr>
                        <th>Blood Group</th>
                        <td >{{$row->blood_group}}</td>
                    </tr>
                    <tr>
                        <th>Payment Number</th>
                        <td>{{$row->bkash}}</td>     
                    </tr>
                    <tr>
                        <th>Transaction Id</th>
                        <td>{{$row->transaction_id}}</td>     
                    </tr>
                    <tr>
                        <th>Total Payment</th>
                        <td>{{$row->total}}</td>     
                    </tr>  
                </tbody>
              </table>
        </div>
        <div class="reg_footer">
            ** When You Came Pleace carrey your Invitation card **
        </div>
        <div class="footer_contact">
            <div class="contact_number">
                Contact Number : 017170870798
            </div>
            <div class="email_info">
                Email : demo@gmail.com
            </div>
        </div>
        
    </div>

    <style>
        
        
        
        .pdf_main_wrap{
        margin: 0 auto;
        width: 600px;
        border: 1px solid #ddd;
        padding: 40px 30px;
        }
        .top_header {
        display: block;
        clear: both;
        width: 100%;
        position: relative;
        height: 160px;
            
        }

        .top_header img {
        display: inline-block;
            position: absolute;
            top: 10px
            
        }

        .reg_tbl_info {
        width: 350px;
        position: absolute;
        left: 0;
        padding-right: 20px;
        }
        .reg_ings_section {
        width: 190px;
        position: absolute;
        right: 0;
        text-align: center;
        top: 50px;
        }
        .pdf_Reg_info {
        position: relative;
        height: 300px;
        top: 50px;
        }
        .pdf_Reg_info h3 {
            position: absolute;
            left: 50%;
            top: 0;
            transform: translate(-50%,0);
            height: 200px;
            
        }
        .reg_table {
        width: 100%;
        border: 1px solid #dee2e6;
        }
        .reg_table tr th {
        font-weight: bold;
        }
        .reg_table tr th, .reg_table tr td {
        border: 1px solid #dee2e6;
        padding: 4px 20px;
        text-align: left;
        }
        .reg_table tr th {
        }
        .reg_ings_section img.border.rounded.ml {
        width: 200px;
        height: 190px;
        object-fit: cover;
        }

        .table_btm tr th, .table_btm tr td{
            border: 1px solid #dee2e6;
        padding: 4px 20px;
        text-align: left;
        }
        .table_btm {
        width: 100%;
        border: 1px solid #dee2e6;
        }
        .table_btm tr th {
        font-weight: bold;
        }
        .reg_footer {
        display: block;
        text-align: center;
        border: 1px solid #ddd;
        margin: 10px 0;
        padding: 10px 10px;
        }
        
        .footer_contact {
        display: block;
        position: relative;
        height: 30px;
        }
        .contact_number {
        position: absolute;
        left: 0;
        }
        .email_info {
        position: absolute;
        right: 0;
        }


        
    



        
    </style>







    <p></p>
    @endforeach







</body>

</html>