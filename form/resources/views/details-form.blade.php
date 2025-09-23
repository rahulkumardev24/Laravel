<div class="container">
    <div class="form-container">
        <h1>Enter Your Details</h1>

        <form action="addDetails" id="userDetailsForm" method="post">
            @csrf

            <div class="form-group">
                <input type="text" name="name" placeholder="Enter your full name" id="name" required>
            </div>

            <div class="form-group">
                <input type="text" name="email" placeholder="Enter your email address" id="email" required>
            </div>

            <h3>Skills</h3>
            <div class="checkbox-group">
                <div class="checkbox-item">
                    <input type="checkbox" id="php" name="skill[]" value="PHP">
                    <label for="php">PHP</label>
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" id="java" name="skill[]" value="Java">
                    <label for="java">Java</label>
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" id="flutter" name="skill[]" value="Flutter">
                    <label for="flutter">Flutter</label>
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" id="laravel" name="skill[]" value="Laravel">
                    <label for="laravel">Laravel</label>
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" id="python" name="skill[]" value="Python">
                    <label for="python">Python</label>
                </div>
            </div>

            <h3>Gender</h3>
            <div class="radio-group">
                <div class="radio-item">
                    <input type="radio" name="gender" value="male" id="male" required>
                    <label for="male">Male</label>
                </div>
                <div class="radio-item">
                    <input type="radio" name="gender" value="female" id="female">
                    <label for="female">Female</label>
                </div>
            </div>

            <h3>City</h3>
            <div class="form-group">
                <select name="city" id="city" required>
                    <option value="">Select your city</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Patna">Patna</option>
                    <option value="Bhopal">Bhopal</option>
                    <option value="Noida">Noida</option>
                    <option value="Chandigarh">Chandigarh</option>
                </select>
            </div>

            <h3>Age: <span id="ageValue" class="range-value">30</span></h3>
            <div class="range-container">
                <input type="range" name="age" id="age" min="14" max="100" value="30">
            </div>

            <button type="submit">Add Details</button>
        </form>

</div>




<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
        background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
    }

    .container {
        width: 100%;
        max-width: 800px;
        display: flex;
        flex-direction: column;
        gap: 30px;
    }

    .form-container,
    .result-container {
        background: white;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        padding: 30px;
        transition: all 0.3s ease;
    }

    .result-container {
        display: none;
    }

    h1 {
        color: #2c3e50;
        text-align: center;
        margin-bottom: 25px;
        font-size: 28px;
        position: relative;
    }


    h3 {
        color: #34495e;
        margin: 20px 0 10px;
        font-size: 18px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    input[type="text"],
    select {
        width: 100%;
        padding: 12px 15px;
        border: 2px solid #e0e0e0;
        border-radius: 8px;
        font-size: 16px;
        transition: border 0.3s;
    }

    input[type="text"]:focus,
    select:focus {
        border-color: #3498db;
        outline: none;
    }

    .checkbox-group,
    .radio-group {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        margin-top: 10px;
    }

    .checkbox-item,
    .radio-item {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    input[type="checkbox"],
    input[type="radio"] {
        width: 18px;
        height: 18px;
        accent-color: #3498db;
    }

    .range-container {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-top: 10px;
    }

    input[type="range"] {
        flex: 1;
        height: 8px;
        background: #e0e0e0;
        border-radius: 4px;
        outline: none;
    }

    input[type="range"]::-webkit-slider-thumb {
        -webkit-appearance: none;
        width: 22px;
        height: 22px;
        background: #3498db;
        border-radius: 50%;
        cursor: pointer;
    }

    .range-value {
        font-weight: bold;
        color: #3498db;
        min-width: 30px;
    }

    button {
        background: #3498db;
        color: white;
        border: none;
        padding: 14px 25px;
        font-size: 18px;
        border-radius: 8px;
        cursor: pointer;
        width: 100%;
        margin-top: 10px;
        transition: background 0.3s;
        font-weight: 600;
    }

    .skill-badge {
        display: inline-block;
        background: #e1f0fa;
        color: #2980b9;
        padding: 5px 12px;
        border-radius: 20px;
        margin-right: 8px;
        margin-bottom: 8px;
        font-size: 14px;
    }

    .gender-badge {
        display: inline-block;
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 14px;
        font-weight: bold;
    }

    .gender-male {
        background: #e1f5fe;
        color: #0277bd;
    }

    .gender-female {
        background: #fce4ec;
        color: #c2185b;
    }

    .city-badge {
        display: inline-block;
        background: #e8f5e9;
        color: #2e7d32;
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 14px;
    }

    .age-badge {
        display: inline-block;
        background: #fff3e0;
        color: #ef6c00;
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 14px;
        font-weight: bold;
    }
</style>