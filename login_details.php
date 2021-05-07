<?php
include_once('CRED.php');
if (isset($_POST['f_name']) && !empty($_POST['f_name'])) {
    $CRED = new CRED();
    echo $CRED->insert_data($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="login_details.css">
    <script src="jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
</head>

<body>
    <div style="background-color: #efefef;border: 3px solid lightgrey;border-radius: 5px;" class="col-sm-12">
        <div class="row">
            <div class="col-sm-12">
                <div>
                    <label style="color: #666;font-size: 1.4em;font-weight: 400;" class="header">Register</label>
                </div>
                <form style="background-color: #efefef;padding: 10px;" action="" method="post" name="insert_data">

                    <table style="border: 3px solid lightgrey;border-radius: 5px;" class="table table-bordered">
                        <tbody>
                            <tr class="table_row">
                                <td class="fieldlabel">Firstname</td>
                                <td class="fieldarea"><input style="float: left;width: auto;" type="text" class="form-control" autocomplete="off" name="f_name" id="f_name" required></td>
                                <td class="fieldlabel">Lastname</td>
                                <td class="fieldarea"><input style="float: left;width: auto;" class="form-control" autocomplete="off" type="text" name="l_name" id="l_name" required></td>
                            </tr>
                            <tr class="table_row">
                                <td class="fieldlabel">Age</td>
                                <td class="fieldarea"><input style="float: left;width: auto;" class="form-control" autocomplete="off" type="text" name="age" id="age" maxlength="3" minlength="1" required></td>
                                <td class="fieldlabel">Gender</td>
                                <td class="fieldarea">
                                    <select style="float: left;width: auto;" class="form-control select-inline" id="gender" name="gender" required>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="table_row">
                                <td class="fieldlabel">Fathername</td>
                                <td class="fieldarea"><input style="float: left;width: auto;" class="form-control" autocomplete="off" type="text" name="father_name" id="father_name" required></td>
                                <td class="fieldlabel">Mothername</td>
                                <td class="fieldarea"><input style="float: left;width: auto;" class="form-control" autocomplete="off" type="text" name="mother_name" id="mother_name" required></td>
                            </tr>
                            <tr class="table_row">
                                <td class="fieldlabel">D.O.B</td>
                                <td class="fieldarea"><input style="float: left;width: auto;" class="form-control" autocomplete="off" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" name="Dob" required></td>
                                <td class="fieldlabel">Email</td>
                                <td class="fieldarea"><input style="float: left;width: auto;" type="email" class="form-control" autocomplete="off" name="email" id="email"></td>
                            </tr>
                            <tr class="table_row">
                                <td class="fieldlabel">Phonenumber</td>
                                <td class="fieldarea"><input style="float: left;width: auto;" class="form-control" autocomplete="off" type="tel" id="phone" name="phone" inputmode="numeric" minlength="10" maxlength="10" required></td>
                                <td class="fieldlabel">Landline</td>
                                <td class="fieldarea"><input style="float: left;width: auto;" class="form-control" autocomplete="off" type="text" name="landline" id="landline" minlength="11" maxlength="11" required></td>
                            </tr>
                            <tr class="table_row">
                                <td class="fieldlabel">Siblings</td>
                                <td class="fieldarea">
                                    <select style="float: left;width: auto;" class="form-control select-inline" id="siblings" name="siblings" required>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </td>
                                <td class="fieldlabel">Priorschool</td>
                                <td class="fieldarea"><input style="float: left;width: auto;" class="form-control" autocomplete="off" type="text" name="school" id="school" required></td>
                            </tr>
                            <tr class="table_row">
                                <td class="fieldlabel">Country</td>
                                <td class="fieldarea">
                                    <select style="float: left;width: auto;" class="form-control select-inline" id="country" name="country" required>
                                        <option value="Afganistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bonaire">Bonaire</option>
                                        <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                        <option value="Brunei">Brunei</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Canary Islands">Canary Islands</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Channel Islands">Channel Islands</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos Island">Cocos Island</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cote DIvoire">Cote DIvoire</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Curaco">Curacao</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="East Timor">East Timor</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands">Falkland Islands</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="French Southern Ter">French Southern Ter</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Great Britain">Great Britain</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Hawaii">Hawaii</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option selected="selected" value="India">India</option>
                                        <option value="India">India</option>
                                        <option value="Iran">Iran</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Isle of Man">Isle of Man</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Korea North">Korea North</option>
                                        <option value="Korea Sout">Korea South</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Laos">Laos</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libya">Libya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macau">Macau</option>
                                        <option value="Macedonia">Macedonia</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Midway Islands">Midway Islands</option>
                                        <option value="Moldova">Moldova</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Nambia">Nambia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherland Antilles">Netherland Antilles</option>
                                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                        <option value="Nevis">Nevis</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Island">Norfolk Island</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau Island">Palau Island</option>
                                        <option value="Palestine">Palestine</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Phillipines">Philippines</option>
                                        <option value="Pitcairn Island">Pitcairn Island</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                                        <option value="Republic of Serbia">Republic of Serbia</option>
                                        <option value="Reunion">Reunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russia">Russia</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="St Barthelemy">St Barthelemy</option>
                                        <option value="St Eustatius">St Eustatius</option>
                                        <option value="St Helena">St Helena</option>
                                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                        <option value="St Lucia">St Lucia</option>
                                        <option value="St Maarten">St Maarten</option>
                                        <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                        <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                        <option value="Saipan">Saipan</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="Samoa American">Samoa American</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syria">Syria</option>
                                        <option value="Tahiti">Tahiti</option>
                                        <option value="Taiwan">Taiwan</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania">Tanzania</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Erimates">United Arab Emirates</option>
                                        <option value="United States of America">United States of America</option>
                                        <option value="Uraguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Vatican City State">Vatican City State</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                        <option value="Wake Island">Wake Island</option>
                                        <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Zaire">Zaire</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                </td>
                                <td class="fieldlabel">Pincode</td>
                                <td class="fieldarea"><input style="float: left;width: auto;" class="form-control" autocomplete="off" type="text" name="pincode" id="pincode" minlength="6" maxlength="6" required></td>
                            </tr>
                            <tr class="table_row">
                                <td class="fieldlabel">Address</td>
                                <td class="fieldarea"><input style="float: left;width: auto;" class="form-control" autocomplete="off" name="address" type="text" id="address" required></td>
                                <td class="fieldlabel">Year</td>
                                <td class="fieldarea">
                                    <select style="float: left;width: auto;" class="form-control select-inline" name="year" id="year" required>
                                        <option value="2021">2021</option>
                                        <option value="2020">2020</option>
                                        <option value="2019">2019</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="table_row">
                                <td class="fieldlabel">Password</td>
                                <td class="fieldarea"><input style="float: left;width: auto;" class="form-control" type="password" name="pass" id="pass" required></td>
                                <td class="fieldlabel">Confirm Password</td>
                                <td class="fieldarea"><input style="float: left;width: auto;" class="form-control" type="password" name="confirm_pass" id="confirm_pass" required></td>
                            </tr>
                            <tr class="table_row">
                                <td class="fieldlabel">Notes</td>
                                <td style="text-align: left;" class="fieldarea" colspan="3"><textarea name="notes" rows="4" class="form-control"></textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <center>
                        <div class="btn-container">
                            <input type="submit" value="Submit" class="btn btn-primary">
                        </div>
                    </center>
                </form>
            </div>
        </div>
    </div>
</body>
<script>
    $("form[name='insert_data']").validate({

        rules: {

            f_name: "required",
            l_name: "required",
            email: {
                required: true,
                email: true
            },
            age: "required",
            father_name: "required",
            mother_name: "required",
            Dob: "required",
            landline: "required",
            school: "required",
            pincode: {
                required: true,
                number: true
            },
            age: {
                required: true,
                number: true
            },
            phone: {
                required: true,
                number: true
            },
            landline: {
                required: true,
                number: true
            },
            adress: "required",
            year: {
                required: function() {
                    return ($("#year option:selected").val() == "0");
                }
            }

        },

        messages: {
            f_name: "*This field is required.",
            l_name: "*This field is required.",
            email: "Please enter a valid email address",
            age: "*Invalid type",
            father_name: "*This field is required.",
            mother_name: "*This field is required.",
            Dob: "*This field is required.",
            phone: "*Invalid type",
            landline: "*Invalid type",
            school: "*This field is required.",
            pincode: "*Invalid type",
            adress: "*This field is required.",
            gender: "*This field is required.",
            year: "Year Required"
        },

        submitHandler: function(form) {
            form.submit();
        }
    });
</script>

</html>