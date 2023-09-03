<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .profile-photo {
            text-align: center;
        }

        .profile-photo img {
            max-width: 150px;
            border-radius: 50%;
        }

        .profile-details {
            padding: 20px;
        }

        .profile-details label {
            font-weight: bold;
        }

        .profile-details .editable {
            cursor: pointer;
            text-decoration: underline;
        }

        .profile-details input[type="text"],
        .profile-details textarea,
        .profile-details select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .profile-details button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .profile-details button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="profile-photo">
            <img src="https://yt3.ggpht.com/a/AATXAJzj63cZVwxRyS6k3k3OYtU2wucigGv97AsIug=s900-c-k-c0xffffffff-no-rj-mo" alt="Profile Picture">
        </div>
        <div class="profile-details">
            <h2>My Profile</h2>
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" disabled placeholder="John">
            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" disabled placeholder="Doe">
            <label for="phoneNumber">Phone Number:</label>
            <input type="text" id="phoneNumber" disabled  placeholder="123-456-7890">
            <label for="address">Address:</label>
            <textarea id="address" rows="4" disabled placeholder="123 Main Street, City, Country"></textarea>
            <label for="email">Email:</label>
            <input type="text" id="email" placeholder="johndoe@example.com" disabled>
            <label for="education">Education:</label>
            <input type="text" id="education" placeholder="Bachelor's in Computer Science" disabled>
            <label for="country">Country:</label>
            <select id="country" disabled>
                <option value="usa">United States</option>
                <option value="canada">Canada</option>
                <option value="uk">United Kingdom</option>
                <!-- Add more options as needed -->
            </select>
            <label for="experiace">Experiace:</label>
            <textarea id="experiace" rows="4" disabled placeholder="Frontend devloper with backend skills a full packeg"></textarea>
            <label for="region">Region:</label>
            <input type="text" id="region" placeholder="California" disabled>
            <button id="editProfileButton" class="editable">Edit Profile</button>
            <button id="saveProfileButton" style="display: none;">Save Profile</button>
        </div>
    </div>
    
    <script>
        const editProfileButton = document.getElementById('editProfileButton');
        const saveProfileButton = document.getElementById('saveProfileButton');
        const editableFields = document.querySelectorAll('.editable');
        let input = document.querySelectorAll("input");
        let textarea = document.getElementById("address");
        let experiace = document.getElementById("experiace");
        let select = document.getElementById("country");
       
        editProfileButton.addEventListener('click', () => {
            console.log(input);
            input.forEach(E => {
                E.removeAttribute("disabled");
            });
            console.log(textarea);
             textarea.removeAttribute("disabled");
             experiace.removeAttribute("disabled");
             select.removeAttribute("disabled");
            editProfileButton.style.display = 'none';
            saveProfileButton.style.display = 'block';
        });

        saveProfileButton.addEventListener('click', () => {
            console.log("nice");
            input.forEach(E => {
                E.setAttribute('disabled', true);
            });
            console.log(textarea);
             textarea.setAttribute('disabled', true);
             experiace.setAttribute('disabled', true);
             select.setAttribute('disabled', true);
            //
            editProfileButton.style.display = 'block';
            saveProfileButton.style.display = 'none';
        });
    </script>
</body>
</html>
