<!doctype html>
<html lang="en">
<head>
  <link rel="stylesheet" href="formpage.css">
</head>
<body>
<ul class="nav_bar">
  <li><a href="forms.html">Forms Page</a></li>
  <li><a href="search.html">Search Database</a></li>
</ul><br><br>
<h1>New Client & Project Forms</h1>
<h2>Client Information</h2>
<div class="client_form">
<form action="connect.php" target="_self" method="post">
  <label for="clientName">Name of Client</label><br>
    <input type="text" id="clientName" name="clientName"><br>
  <label for="clientEmail">Client Email</label><br>
    <input type="clientEmail" id="clientEmail" name="clientEmail"><br>
  <label for="actName">Name of Act</label><br>
    <input type="text" id="actName" name="actName"><br>
  <label for="City">City</label><br>
    <input type="text" id="City" name="City"><br>
  <label for="StateProvince">State/Province</label><br>
    <select id="StateProvince" name="StateProvince"><br>
    <option value="AL">Alabama</option>
  	<option value="AK">Alaska</option>
  	<option value="AZ">Arizona</option>
  	<option value="AR">Arkansas</option>
  	<option value="CA">California</option>
  	<option value="CO">Colorado</option>
  	<option value="CT">Connecticut</option>
  	<option value="DE">Delaware</option>
  	<option value="DC">District Of Columbia</option>
  	<option value="FL">Florida</option>
  	<option value="GA">Georgia</option>
  	<option value="HI">Hawaii</option>
  	<option value="ID">Idaho</option>
  	<option value="IL">Illinois</option>
  	<option value="IN">Indiana</option>
  	<option value="IA">Iowa</option>
  	<option value="KS">Kansas</option>
  	<option value="KY">Kentucky</option>
  	<option value="LA">Louisiana</option>
  	<option value="ME">Maine</option>
  	<option value="MD">Maryland</option>
  	<option value="MA">Massachusetts</option>
  	<option value="MI">Michigan</option>
  	<option value="MN">Minnesota</option>
  	<option value="MS">Mississippi</option>
  	<option value="MO">Missouri</option>
  	<option value="MT">Montana</option>
  	<option value="NE">Nebraska</option>
  	<option value="NV">Nevada</option>
  	<option value="NH">New Hampshire</option>
  	<option value="NJ">New Jersey</option>
  	<option value="NM">New Mexico</option>
  	<option value="NY">New York</option>
  	<option value="NC">North Carolina</option>
  	<option value="ND">North Dakota</option>
  	<option value="OH">Ohio</option>
  	<option value="OK">Oklahoma</option>
  	<option value="OR">Oregon</option>
  	<option value="PA">Pennsylvania</option>
  	<option value="RI">Rhode Island</option>
  	<option value="SC">South Carolina</option>
  	<option value="SD">South Dakota</option>
  	<option value="TN">Tennessee</option>
  	<option value="TX">Texas</option>
  	<option value="UT">Utah</option>
  	<option value="VT">Vermont</option>
  	<option value="VA">Virginia</option>
  	<option value="WA">Washington</option>
  	<option value="WV">West Virginia</option>
  	<option value="WI">Wisconsin</option>
  	<option value="WY">Wyoming</option>
    <option value="AS">American Samoa</option>
    <option value="GU">Guam</option>
    <option value="MP">Northern Mariana Islands</option>
    <option value="PR">Puerto Rico</option>
    <option value="UM">United States Minor Outlying Islands</option>
    <option value="VI">Virgin Islands</option>
    <option value="AB">Alberta</option>
    <option value="BC">British Columbia</option>
    <option value="MB">Manitoba</option>
    <option value="NB">New Brunswick</option>
    <option value="NL">Newfoundland and Labrador</option>
    <option value="NS">Nova Scotia</option>
    <option value="ON">Ontario</option>
    <option value="PE">Prince Edward Island</option>
    <option value="QC">Quebec</option>
    <option value="SK">Saskatchewan</option>
    <option value="NT">Northwest Territories</option>
    <option value="NU">Nunavut</option>
    <option value="YT">Yukon</option>
    <option value="Other">Non-US or Canada</option>
  </select><br>
  <label for="Country">Country</label><br>
    <input type="text" id="Country" name="Country"><br>
  <label for="clientSource">Source of Client</label><br>
    <input type="text" id="clientSource" name="clientSource"><br>
  <label for="company">Associated Label or Company</label><br>
    <input type="text" id="company" name="company"><br>
    <small>(Write NA for independent)</small><br><br>
</div>
<div class="project_form">
<h2>Project Information</h2><div class="project_form">
  <label for="startDate">Start Date</label><br>
    <input type="date" id="startDate" name="startDate"><br>
  <label for="endDate">End Date</label><br>
    <input type="date" id="endDate" name="endDate"><br>
  <label for="monthlySpot">Spotify Monthly Listeners
    <small>(as of start date)</small><br>
    <input type="number" id="epkType" name="epkType"><br>
  <label for="epkType">EPK Type</label><br>
    <input type="number" id="epkType" name="epkType"><br>
  <label for="genre">Genre</label><br>
    <input type="text" id="genre" name="genre"><br><br>
  Outlets Targeted   <!-- spotify=sp ap=apple music youtube=yt ra=radio bl=blogs ws=website/seo
    ig=instagram tt=tiktok ev=event mkt --><br>
    <input type="checkbox" id="spotify" name="outlet[]" value="sp">
    <label for="spotify">Spotify</label>
    <input type="checkbox" id="apple" name="outlet[]" value="ap">
    <label for="apple">Apple Music</label>
    <input type="checkbox" id="youtube" name="outlet[]" value="yt">
    <label for="youtube">YouTube</label><br>
    <input type="checkbox" id="radio" name="outlet[]" value="ra">
    <label for="radio">Radio</label>
    <input type="checkbox" id="blogs" name="outletp[]" value="bl">
    <label for="blogs">Publications & Blogs</label>
    <input type="checkbox" id="website" name="outlet[]" value="ws">
    <label for="website">Website/SEO</label><br>
    <input type="checkbox" id="instagram" name="outlet[]" value="ig">
    <label for="Instagram">Instagram</label>
    <input type="checkbox" id="tiktok" name="outlet[]" value="tt">
    <label for="tiktok">TikTok</label>
    <input type="checkbox" id="event" name="outlet[]" value="ev">
    <label for="event">Event Marketing</label><br><br>
  <label for="hrRate">Hourly Rate</label><br>
  <input type="number" id="hrRate" name="hrRate"><br>
  <label for="comments">Additional Information</label><br>
    <input type="text" id="comments" name="comments" size="100s"><br>
  <input type="submit" onclick="alert('Forms submitted')" value="Submit">
</div></form>
</body>
</html>
