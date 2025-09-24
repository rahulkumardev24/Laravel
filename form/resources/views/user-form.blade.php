

   <div class="container">
        <div class="header">
            <h1>Add New User</h1>
    
        </div>


        <div class="form-container">

        <!-- Error Show Here  -->
         <!-- All error show  -->
         
<!--        @if($errors->any())
       @foreach($errors -> all() as $error)
       <div style="color : red">
        {{$error}}
       </div>
       @endforeach
       @endif -->

            <form action="adduser" method="post">
                @csrf               
                 <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" placeholder="Enter your username" name="username" value="{{old('username')}}" >
                    <span class="icon">👤</span>
                </div>
                <span style="color : red">@error('username'){{$message}}@enderror</span>
                
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="text" id="email" placeholder="Enter your email" name="email"  value="{{old('email')}}" >
                    <span class="icon">✉️</span>
                </div>
                  <span style="color : red">@error('email'){{$message}}@enderror</span>
                
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" id="city" placeholder="Enter your city" name="city" value="{{old('city')}}" >
                    <span class="icon">🏙️</span>
                </div>
                  <span style="color : red">@error('city'){{$message}}@enderror</span>
                
                <button type="submit" class="btn">Add User</button>
            </form>
            
        
        </div>
    </div>

 <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #addafeff 0%, #5abaffff 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 450px;
            overflow: hidden;
        }
        
        .header {
            background: linear-gradient(to right, #52abfeff, #0ac2ffff);
            color: white;
            padding: 25px 20px;
            text-align: center;
        }
        
        .header h1 {
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 5px;
        }
        
        .header p {
            font-size: 0.9rem;
            opacity: 0.9;
        }
        
        .form-container {
            padding: 30px;
        }
        
        .form-group {
            margin-bottom: 20px;
            position: relative;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #333;
            font-size: 0.9rem;
        }
        
        .form-group input {
            width: 100%;
            padding: 14px 15px;
            border: 1.5px solid #e1e5ee;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background-color: #f8f9fa;
        }
        
        .form-group input:focus {
            outline: none;
            border-color: #7b2ff7;
            background-color: white;
            box-shadow: 0 0 0 3px rgba(123, 47, 247, 0.1);
        }
        
        .form-group input::placeholder {
            color: #a0a4a8;
        }
        
        .btn {
            background: linear-gradient(to right, #4cabf8ff, #309ffaff);
            color: white;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
        }
        
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(123, 47, 247, 0.4);
        }
        
        .btn:active {
            transform: translateY(0);
        }
        
        
        .icon {
            position: absolute;
            right: 15px;
            top: 38px;
            color: #a0a4a8;
        }
        
        @media (max-width: 480px) {
            .container {
                border-radius: 10px;
            }
            
            .form-container {
                padding: 20px;
            }
        }
    </style>