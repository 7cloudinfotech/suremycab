<!DOCTYPE html>
<html lang="en">
  
  <?php include 'header.php';?>

    <div class="page-content-wrapper">
      <!-- Welcome Toast -->
      <div class="toast toast-autohide custom-toast-1 toast-warning home-page-toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="3500" data-bs-autohide="true">
        <div class="toast-body">
         <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-file-arrow-up" viewBox="0 0 16 16">
          <path d="M8 11a.5.5 0 0 0 .5-.5V6.707l1.146 1.147a.5.5 0 0 0 .708-.708l-2-2a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L7.5 6.707V10.5a.5.5 0 0 0 .5.5z"/>
          <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
         </svg>
          <div class="toast-text ms-3 me-2">
            <p class="mb-1 text-white">Welcome to SureMyCab.com!</p><small class="d-block">Click the "Add to Home Screen" button &amp; enjoy it like an app.</small>
          </div>
        </div>
        <button class="btn btn-close btn-close-white position-absolute p-1" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <!-- Tiny Slider One Wrapper -->
      <div class="tiny-slider-one-wrapper">
        <div class="tiny-slider-one">
          <!-- Single Hero Slide -->
          <div>
            <div class="single-hero-slide bg-overlay" style="background-image: url('img/bg-img/sld.jpg')">
              <div class="h-100 d-flex align-items-center text-center">
                <div class="container">
                  <h3 class="text-white mb-1">Easy Cab Booking Online</h3>
                  <p class="text-white mb-4"></p><a class="btn btn-creative btn-warning" href="#">Book Now</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Single Hero Slide -->
          <div>
            <div class="single-hero-slide bg-overlay" style="background-image: url('img/bg-img/sld1.jpg')">
              <div class="h-100 d-flex align-items-center text-center">
                <div class="container">
                  <h3 class="text-white mb-1">Anywhere in India</h3>
                  <p class="text-white mb-4"></p><a class="btn btn-creative btn-warning" href="#">Book Now</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Single Hero Slide -->
          <div> 
            <div class="single-hero-slide bg-overlay" style="background-image: url('img/bg-img/sld2.jpg')">
              <div class="h-100 d-flex align-items-center text-center">
                <div class="container">
                  <h3 class="text-white mb-1">Pickup | Drop at Doorstep</h3>
                  <p class="text-white mb-4"></p><a class="btn btn-creative btn-warning" href="#">Book Now</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Single Hero Slide -->
          <div> 
            <div class="single-hero-slide bg-overlay" style="background-image: url('img/bg-img/sld3.jpg')">
              <div class="h-100 d-flex align-items-center text-center">
                <div class="container">
                  <h3 class="text-white mb-1">Always On Time</h3>
                  <p class="text-white mb-4"></p><a class="btn btn-creative btn-warning" href="#">Book Now</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Single Hero Slide Ends here 4 slides -->
          
        </div>
      </div>
      <div class="pt-2"></div>
      <div class="container">
        <div class="card">
          <div class="card-body">
            <div class="standard-tab">
              <ul class="nav rounded-lg mb-2 p-2 shadow-sm" id="affanTabs1" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="btn active" id="outstation-tab" data-bs-toggle="tab" data-bs-target="#outstation" type="button" role="tab" aria-controls="outstation" aria-selected="true">OutStation</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="btn" id="local-tab" data-bs-toggle="tab" data-bs-target="#local" type="button" role="tab" aria-controls="local" aria-selected="false">Local</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="btn" id="airport-tab" data-bs-toggle="tab" data-bs-target="#airport" type="button" role="tab" aria-controls="airport" aria-selected="false">Airport</button>
                </li>
              </ul>
              <div class="tab-content rounded-lg p-0 shadow-sm" id="affanTabs1Content">
                <div class="tab-pane fade show active" id="outstation" role="tabpanel" aria-labelledby="outstation-tab">
                  <div class="container">
                    <div class="card">
                      <div class="card-body " style="padding: 0.5rem;">
                        <div class="minimal-tab">
                          <ul class="nav nav-tabs mb-3" id="affanTab2" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="btn active" id="oneway-tab" data-bs-toggle="tab" data-bs-target="#oneway" type="button" role="tab" aria-controls="oneway" aria-selected="true">OneWay</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="btn" id="roundway-tab" data-bs-toggle="tab" data-bs-target="#roundway" type="button" role="tab" aria-controls="roundway" aria-selected="false">RoundWay</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="btn" id="multicity-tab" data-bs-toggle="tab" data-bs-target="#multicity" type="button" role="tab" aria-controls="multicity" aria-selected="false">MultiCity</button>
                            </li>
                          </ul>
                          <div class="tab-content rounded-lg p-0" id="affanTab2Content" style="border: 0;">
                            <div class="tab-pane fade show active" id="oneway" role="tabpanel" aria-labelledby="oneway-tab">
                              <div class="card-body">
                                <form action="searchcab.php" autocomplete="off">
                                  <div class="form-group">
                                    <input class="form-control" id="autoCompletePlace" type="text" name="place" placeholder="Pickup From City">
                                  </div>
                                  <div class="form-group">
                                    <input class="form-control" id="autoCompletePlace2" type="text" name="place2" placeholder="Drop Destination City">
                                  </div>
                                  <div class="form-group">
                                    <label class="form-label" for="pickDate">Pickup Date</label>
                                    <input class="form-control" id="pickDate" type="date">
                                    </div>
                                    <div class="form-group">
                                    <label class="form-label" for="pickTime">Pickup Time</label>
                                    <input class="form-control" id="pickTime" type="time">
                                    </div>
                                  
                                  <div class="form-group">
                                  <a class="btn btn-creative btn-light p-2" href="searchcab.php">Search Cab</a>
                                  </div>
                                </form>
                              </div>
                            </div>

                            
                            
                            <div class="tab-pane fade" id="roundway" role="tabpanel" aria-labelledby="roundway-tab">
                              <div class="card-body ">
                                <form action="searchcab.php" autocomplete="off">
                                    <div class="form-group">
                                    <input class="form-control" id="autoCompletePlace3" type="text" name="place" placeholder="Pickup From City">
                                    </div>
                                    <div class="form-group">
                                    <input class="form-control" id="autoCompletePlace4" type="text" name="place2" placeholder="Drop Destination City">
                                    </div>
                                    <div class="form-group">
                                    <label class="form-label" for="pickDate">Pickup Date</label>
                                    <input class="form-control" id="pickDate" type="date">
                                    </div>
                                    <div class="form-group">
                                    <label class="form-label" for="dropDate">Drop Date</label>
                                    <input class="form-control" id="dropDate" type="date">
                                    </div>
                                    <div class="form-group">
                                    <label class="form-label" for="pickTime">Pickup Time</label>
                                    <input class="form-control" id="pickTime" type="time">
                                    </div>
                                    <div class="form-group">
                                    <a class="btn btn-creative btn-light p-2" href="searchcab.php">Search Cab</a>
                                    </div>
                                </form>
                              </div>
                            </div>

                            <div class="tab-pane fade" id="multicity" role="tabpanel" aria-labelledby="roundway-tab">
                              <div class="card-body ">
                                <form action="searchcab.php" autocomplete="off">
                                  <div class="form-group">
                                    <input class="form-control" id="autoCompletePlace5" type="text" name="place" placeholder="Pickup From City">
                                  </div>
                                  <div class="form-group">
                                    <label class="form-label" for="pickDate">Pickup Date</label>
                                    <input class="form-control" id="pickDate" type="date">
                                  </div>
                                  <div class="form-group">
                                    <label class="form-label" for="pickTime">Pickup Time</label>
                                    <input class="form-control" id="pickTime" type="time">
                                  </div>
                                  <div class="form-group">
                                    <input class="form-control" id="exampleInputnumber" type="number" placeholder="Days of Journey">
                                  </div>
                                  <div class="form-group">
                                    <label class="form-label" for="multipleSelect">Select Cities</label>
                                    <select class="form-select" id="autoCompletePlace6" name="multipleSelect" multiple aria-label="multiple select example">
                                      <option value="1"> Abu Road </option>
                                      <option value="2"> Adilabad </option>
                                      <option value="3"> Adoor </option>
                                      <option value="4"> Agra </option>
                                      <option value="5"> Agumbe </option>
                                      <option value="6"> Ahmedabad </option>
                                      <option value="7"> Ahmedanagar </option>
                                      <option value="8"> Ahmednagar </option>
                                      <option value="9"> Ajmer </option>
                                      <option value="10"> Akola </option>
                                      <option value="11"> Alappuzha </option>
                                      <option value="12"> Alibag </option>
                                      <option value="13"> Aligarh </option>
                                      <option value="14"> Alleppey </option>
                                      <option value="15"> alsad </option>
                                      <option value="16"> Alwar </option>
                                      <option value="17"> Alwara </option>
                                      <option value="18"> Ambala </option>
                                      <option value="19"> Ambarnath </option>
                                      <option value="20"> Ambattur </option>
                                      <option value="21"> Ambikapur </option>
                                      <option value="22"> Amravati </option>
                                      <option value="23"> Amreli </option>
                                      <option value="24"> Amritsar </option>
                                      <option value="25"> Anand </option>
                                      <option value="26"> Ankleshwar </option>
                                      <option value="27"> Ara </option>
                                      <option value="28"> Arrah </option>
                                      <option value="29"> Asansol </option>
                                      <option value="30"> Atingal </option>
                                      <option value="31"> Aurangabad </option>
                                      <option value="32"> Avadi </option>
                                      <option value="33"> Ayodhya </option>
                                      <option value="34"> Azamgarh </option>
                                      <option value="35"> Bandipur </option>
                                      <option value="36"> Bangalore </option>
                                      <option value="37"> Bantwal </option>
                                      <option value="38"> Baramati </option>
                                      <option value="39"> Barddhaman </option>
                                      <option value="40"> Bardoli </option>
                                      <option value="41"> Bareilly </option>
                                      <option value="42"> Bareli </option>
                                      <option value="43"> Barisal </option>
                                      <option value="44"> Barnala </option>
                                      <option value="45"> Bathinda </option>
                                      <option value="46"> Beawar </option>
                                      <option value="47"> Behrampur </option>
                                      <option value="48"> Bekal </option>
                                      <option value="49"> Bellary </option>
                                      <option value="50"> Bhadohi </option>
                                      <option value="51"> Bhadrachalam </option>
                                      <option value="52"> Bhagalpur </option>
                                      <option value="53"> Bhandara </option>
                                      <option value="54"> Bharatpur </option>
                                      <option value="55"> Bharuch </option>
                                      <option value="56"> Bhatpara </option>
                                      <option value="57"> Bhavnagar </option>
                                      <option value="58"> Bheemeshwari </option>
                                      <option value="59"> Bhilai </option>
                                      <option value="60"> Bhilwara </option>
                                      <option value="61"> Bhiwandi </option>
                                      <option value="62"> Bhopal </option>
                                      <option value="63"> Bhubaneswar </option>
                                      <option value="64"> Bhuj </option>
                                      <option value="65"> Bikaner </option>
                                      <option value="66"> Bilaspur </option>
                                      <option value="67"> Bokaro </option>
                                      <option value="68"> Borsad </option>
                                      <option value="69"> Botad </option>
                                      <option value="70"> Brahmapur </option>
                                      <option value="71"> Burdhwan </option>
                                      <option value="72"> Burdwan </option>
                                      <option value="73"> Burhanpur </option>
                                      <option value="74"> Calicut </option>
                                      <option value="75"> Chandarpar </option>
                                      <option value="76"> Chandigarh </option>
                                      <option value="77"> Chandrapur </option>
                                      <option value="78"> Chennai </option>
                                      <option value="79"> Chhapra </option>
                                      <option value="80"> Chhindwara </option>
                                      <option value="81"> Chiitaurgarh </option>
                                      <option value="82"> Chikkamagaluru </option>
                                      <option value="83"> Chitrakut Dham </option>
                                      <option value="84"> Chittaurgarh </option>
                                      <option value="85"> Chittorgarh </option>
                                      <option value="86"> Churu </option>
                                      <option value="87"> Coimbatore </option>
                                      <option value="88"> Coorg </option>
                                      <option value="89"> Dahej </option>
                                      <option value="90"> Dahod </option>
                                      <option value="91"> Dakor </option>
                                      <option value="92"> Daman </option>
                                      <option value="93"> Dandeli </option>
                                      <option value="94"> Darbangha </option>
                                      <option value="95"> Dehradun </option>
                                      <option value="96"> Delhi </option>
                                      <option value="97"> Deolali </option>
                                      <option value="98"> Dewas </option>
                                      <option value="99"> Dhamtari </option>
                                      <option value="100"> Dhanbad </option>
                                      <option value="101"> Dhanbadh </option>
                                      <option value="102"> Dhar </option>
                                      <option value="103"> Dhrangadhra </option>
                                      <option value="104"> Dhule </option>
                                      <option value="105"> Digha </option>
                                      <option value="106"> Dindigul </option>
                                      <option value="107"> Diu </option>
                                      <option value="108"> Dungarpur </option>
                                      <option value="109"> Durg </option>
                                      <option value="110"> Durgapur </option>
                                      <option value="111"> Ernakulam </option>
                                      <option value="112"> Erode </option>
                                      <option value="113"> Etah </option>
                                      <option value="114"> Etawah </option>
                                      <option value="115"> Faizabad </option>
                                      <option value="116"> Faridabad </option>
                                      <option value="117"> Faridkot </option>
                                      <option value="118"> Farrukhabad </option>
                                      <option value="119"> Fatehpur </option>
                                      <option value="120"> Firozabad </option>
                                      <option value="121"> Firozpur </option>
                                      <option value="122"> Gandhidham </option>
                                      <option value="123"> Gandhinagar </option>
                                      <option value="124"> Gaya </option>
                                      <option value="125"> Ghaziabad </option>
                                      <option value="126"> Ghazipur </option>
                                      <option value="127"> Goarakhpur </option>
                                      <option value="128"> Godhra </option>
                                      <option value="129"> Gondal </option>
                                      <option value="130"> Gorakhpur </option>
                                      <option value="131"> Gulbarga </option>
                                      <option value="132"> Guna </option>
                                      <option value="133"> Guntur </option>
                                      <option value="134"> Guravayur </option>
                                      <option value="135"> Gurdaspur </option>
                                      <option value="136"> Gwalior </option>
                                      <option value="137"> Habra </option>
                                      <option value="138"> Haldia </option>
                                      <option value="139"> Halol </option>
                                      <option value="140"> Haridwar </option>
                                      <option value="141"> Haripad </option>
                                      <option value="142"> Hazaribag </option>
                                      <option value="143"> Himmatnagar </option>
                                      <option value="144"> Hisar </option>
                                      <option value="145"> Hoshiarpur </option>
                                      <option value="146"> Hyderabad </option>
                                      <option value="147"> Idukki </option>
                                      <option value="148"> Indore </option>
                                      <option value="149"> Itarsi </option>
                                      <option value="150"> Jabalpur </option>
                                      <option value="151"> Jagdalpur </option>
                                      <option value="152"> Jaipur </option>
                                      <option value="153"> Jaisalmer </option>
                                      <option value="154"> Jalandhar </option>
                                      <option value="155"> Jalgaon </option>
                                      <option value="156"> Jalna </option>
                                      <option value="157"> Jammu </option>
                                      <option value="158"> Jamnagar </option>
                                      <option value="159"> Jamshedpur </option>
                                      <option value="160"> Jaunpur </option>
                                      <option value="161"> Jhansi </option>
                                      <option value="162"> Jhunjhunun </option>
                                      <option value="163"> Jodhpur </option>
                                      <option value="164"> Junagadh </option>
                                      <option value="165"> Kadi </option>
                                      <option value="166"> Kakinada </option>
                                      <option value="167"> Kalyan </option>
                                      <option value="168"> Kalyani </option>
                                      <option value="169"> Kanchipuram </option>
                                      <option value="170"> Kanhanational </option>
                                      <option value="171"> Kanniyakumari </option>
                                      <option value="172"> Kannur </option>
                                      <option value="173"> Kanpur </option>
                                      <option value="174"> Kanyakumari </option>
                                      <option value="175"> Kapurthala </option>
                                      <option value="176"> Karad </option>
                                      <option value="177"> Karimnagar </option>
                                      <option value="178"> Karnal </option>
                                      <option value="179"> Karwar </option>
                                      <option value="180"> Kasaragod </option>
                                      <option value="181"> Kasargod </option>
                                      <option value="182"> Kashid </option>
                                      <option value="183"> Katni </option>
                                      <option value="184"> Khajuraho </option>
                                      <option value="185"> Khambhat </option>
                                      <option value="186"> Khammam </option>
                                      <option value="187"> Khandwa </option>
                                      <option value="188"> Kharagpur </option>
                                      <option value="189"> Khopoli </option>
                                      <option value="190"> Khulna </option>
                                      <option value="191"> Kishangarh </option>
                                      <option value="192"> Kochi </option>
                                      <option value="193"> Kodaikanal </option>
                                      <option value="194"> Kolhapur </option>
                                      <option value="195"> Kolkata </option>
                                      <option value="196"> Kollam </option>
                                      <option value="197"> Kolli Hill </option>
                                      <option value="198"> Korba </option>
                                      <option value="199"> Kota </option>
                                      <option value="200"> Kottayam </option>
                                      <option value="201"> Krishnanagar </option>
                                      <option value="202"> Kuchaman </option>
                                      <option value="203"> Kudremukh </option>
                                      <option value="204"> Kulti </option>
                                      <option value="205"> Kurnool </option>
                                      <option value="206"> Kurukshetra </option>
                                      <option value="207"> Latur </option>
                                      <option value="208"> Lavassa </option>
                                      <option value="209"> Lonavala </option>
                                      <option value="210"> Lonavla </option>
                                      <option value="211"> Lucknow </option>
                                      <option value="212"> Ludhiana </option>
                                      <option value="213"> Madhubani </option>
                                      <option value="214"> Madikari </option>
                                      <option value="215"> Madurai </option>
                                      <option value="216"> Mahabaleshwar </option>
                                      <option value="217"> Mahabalipuram </option>
                                      <option value="218"> Maisuru </option>
                                      <option value="219"> Malappuram </option>
                                      <option value="220"> Malegaon </option>
                                      <option value="221"> Maler Kotla </option>
                                      <option value="222"> Manali </option>
                                      <option value="223"> Mandarmani </option>
                                      <option value="224"> Mandla </option>
                                      <option value="225"> Manikaran </option>
                                      <option value="226"> Manipal </option>
                                      <option value="227"> Matheran </option>
                                      <option value="228"> Mathura </option>
                                      <option value="229"> Mau </option>
                                      <option value="230"> Mayapur </option>
                                      <option value="231"> McleodGanj </option>
                                      <option value="232"> Medak </option>
                                      <option value="233"> Medinipur </option>
                                      <option value="234"> Meerut </option>
                                      <option value="235"> Mehsana </option>
                                      <option value="236"> Mirzapur </option>
                                      <option value="237"> Modasa </option>
                                      <option value="238"> Moga </option>
                                      <option value="239"> Mogha </option>
                                      <option value="240"> Moodbidri </option>
                                      <option value="241"> Moradabad </option>
                                      <option value="242"> Morbi </option>
                                      <option value="243"> Morena </option>
                                      <option value="244"> Motihari </option>
                                      <option value="245"> Mount Abu </option>
                                      <option value="246"> Mumbai Airport </option>
                                      <option value="247"> Mumbai </option>
                                      <option value="248"> Munger </option>
                                      <option value="249"> Munnar </option>
                                      <option value="250"> Murthal </option>
                                      <option value="251"> Muzaffarpur </option>
                                      <option value="252"> Mysore </option>
                                      <option value="253"> Nadiad </option>
                                      <option value="254"> Nagarhole </option>
                                      <option value="255"> Nagercoil </option>
                                      <option value="256"> Nagothane </option>
                                      <option value="257"> Nagpur </option>
                                      <option value="258"> Nagpur </option>
                                      <option value="259"> Naihati </option>
                                      <option value="260"> Nanded </option>
                                      <option value="261"> Nandurbar </option>
                                      <option value="262"> Nandyal </option>
                                      <option value="263"> Nashik </option>
                                      <option value="264"> Nathdwara </option>
                                      <option value="265"> Navi Mumbai </option>
                                      <option value="266"> Navsari </option>
                                      <option value="267"> Nellore </option>
                                      <option value="268"> Nizamabad </option>
                                      <option value="269"> Noida </option>
                                      <option value="270"> Omkareshwar </option>
                                      <option value="271"> Ooty </option>
                                      <option value="272"> Osmanabad </option>
                                      <option value="273"> Palakad </option>
                                      <option value="274"> Palakkad </option>
                                      <option value="275"> Palani </option>
                                      <option value="276"> Palanpur </option>
                                      <option value="277"> Palghar </option>
                                      <option value="278"> Pali </option>
                                      <option value="279"> Palitana </option>
                                      <option value="280"> Panchkula </option>
                                      <option value="281"> Pandharpur </option>
                                      <option value="282"> Panipat </option>
                                      <option value="283"> Parbhani </option>
                                      <option value="284"> Patan </option>
                                      <option value="285"> Pathankot </option>
                                      <option value="286"> Patiala </option>
                                      <option value="287"> Patna </option>
                                      <option value="288"> Payyannur </option>
                                      <option value="289"> Payyanur </option>
                                      <option value="290"> Pilani </option>
                                      <option value="291"> Pimpri </option>
                                      <option value="292"> Pipariya </option>
                                      <option value="293"> Pithampur </option>
                                      <option value="294"> Pondicherry </option>
                                      <option value="295"> Porbandar </option>
                                      <option value="296"> Prayagraj </option>
                                      <option value="297"> Pune </option>
                                      <option value="298"> Puri </option>
                                      <option value="299"> Purnia </option>
                                      <option value="300"> Pushkar </option>
                                      <option value="301"> Raebareli </option>
                                      <option value="302"> Rai Bareli </option>
                                      <option value="303"> Raigarh </option>
                                      <option value="304"> Raipur Raipur </option>
                                      <option value="305"> Raipur </option>
                                      <option value="306"> Raisen </option>
                                      <option value="307"> Rajamahendri </option>
                                      <option value="308"> Rajgarh </option>
                                      <option value="309"> Rajgir </option>
                                      <option value="310"> Rajkot </option>
                                      <option value="311"> Rajnandhgaon </option>
                                      <option value="312"> Rajpipla </option>
                                      <option value="313"> Rajshahi </option>
                                      <option value="314"> Rameswaram </option>
                                      <option value="315"> Ramgarh </option>
                                      <option value="316"> Ranchi </option>
                                      <option value="317"> Ratlam </option>
                                      <option value="318"> Raurkela </option>
                                      <option value="319"> Rewa </option>
                                      <option value="320"> Rishikesh </option>
                                      <option value="321"> Rohtak </option>
                                      <option value="322"> Sabarimala </option>
                                      <option value="323"> Sagar </option>
                                      <option value="324"> Saharsa </option>
                                      <option value="325"> Samastipur </option>
                                      <option value="326"> Sangrur </option>
                                      <option value="327"> Satara </option>
                                      <option value="328"> Satna </option>
                                      <option value="329"> Sehore </option>
                                      <option value="330"> Selam </option>
                                      <option value="331"> Seoni </option>
                                      <option value="332"> Shahjahanpur </option>
                                      <option value="333"> Shantiniketan </option>
                                      <option value="334"> Sharif </option>
                                      <option value="335"> Sharmasthal </option>
                                      <option value="336"> Shbarimala </option>
                                      <option value="337"> Shimla </option>
                                      <option value="338"> Shirdi </option>
                                      <option value="339"> Shirpur </option>
                                      <option value="340"> Shivapuri </option>
                                      <option value="341"> Sholapur </option>
                                      <option value="342"> Shornur </option>
                                      <option value="343"> Sikar </option>
                                      <option value="344"> Sirsa </option>
                                      <option value="345"> Sitapur </option>
                                      <option value="346"> Solapur </option>
                                      <option value="347"> Somnath </option>
                                      <option value="348"> Sonipat </option>
                                      <option value="349"> Srisailam </option>
                                      <option value="350"> Surat </option>
                                      <option value="351"> Surendranagar </option>
                                      <option value="352"> Talassery </option>
                                      <option value="353"> Tamil Nadu </option>
                                      <option value="354"> Thalassery </option>
                                      <option value="355"> Thane </option>
                                      <option value="356"> Thanjavur </option>
                                      <option value="357"> Thiruvananthapuram </option>
                                      <option value="358"> Thrissur </option>
                                      <option value="359"> Tirumala Temple </option>
                                      <option value="360"> Tirunelveli </option>
                                      <option value="361"> Tirupati </option>
                                      <option value="362"> Tiruppur </option>
                                      <option value="363"> Tiruvottiyur </option>
                                      <option value="364"> Trichy </option>
                                      <option value="365"> Trimbak </option>
                                      <option value="366"> Trimbakeshwar </option>
                                      <option value="367"> Trimbakeshwr </option>
                                      <option value="368"> Tundla </option>
                                      <option value="369"> Udaipur </option>
                                      <option value="370"> Udupi </option>
                                      <option value="371"> Ujjain </option>
                                      <option value="372"> Ulhasnagar </option>
                                      <option value="373"> Ulubaria </option>
                                      <option value="374"> Unjha </option>
                                      <option value="375"> Vatakara </option>
                                      <option value="376"> Vadodara </option>
                                      <option value="377"> Valsad </option>
                                      <option value="378"> Vapi </option>
                                      <option value="379"> Varanasi </option>
                                      <option value="380"> Varkala </option>
                                      <option value="381"> Velankanni </option>
                                      <option value="382"> Vemulawada </option>
                                      <option value="383"> Veraval </option>
                                      <option value="384"> Vidisha </option>
                                      <option value="385"> Vijayawada </option>
                                      <option value="386"> Virejpat </option>
                                      <option value="387"> Vrindavan </option>
                                      <option value="388"> Warangal </option>
                                      <option value="389"> Wardha </option>
                                      <option value="390"> Wayanad </option>
                                      <option value="391"> Yamuna Nagar </option>
                                      <option value="392"> Yamunanagar </option>
                                      <option value="393"> Yavatmal </option>
                                      <option value="394"> Yelagiri </option>
                                      <option value="395"> Yercaud </option>
                                      <option value="396"> Luxembour </option>
                                    </select>
                                  </div>
                                  
                                  <div class="form-group mt-3">
                                    <a class="btn btn-creative btn-light p-2" href="searchcab.php">Search Cab</a>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="local" role="tabpanel" aria-labelledby="local-tab">
                  <div class="card-body  p-3">
                    <form action="searchcab.php" autocomplete="off">
                        <div class="form-group">
                        <input class="form-control" id="autoCompletePlace7" type="text" name="place" placeholder="Select City">
                        </div>
                        <div class="form-group">
                        <input class="form-control" id="autoCompletePlace4" type="text" name="place2" placeholder="Select Package">
                        </div>
                        <div class="form-group">
                        <a class="btn btn-creative btn-light p-2" href="#">Book Package</a>
                        </div>
                    </form>
                  </div>
                </div>
                <div class="tab-pane fade" id="airport" role="tabpanel" aria-labelledby="airport-tab">
                  <div class="container">
                    <div class="card">
                      <div class="card-body " style="padding: 0.5rem;">
                        <div class="minimal-tab">
                          <ul class="nav nav-tabs mb-3" id="affanTab2" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="btn active" id="pick-tab" data-bs-toggle="tab" data-bs-target="#sass" type="button" role="tab" aria-controls="sass" aria-selected="true">Pickup</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="btn" id="drop-tab" data-bs-toggle="tab" data-bs-target="#npm" type="button" role="tab" aria-controls="npm" aria-selected="false">Drop</button>
                            </li>
                          </ul>
                          <div class="tab-content rounded-lg p-0" id="affanTab2Content" style="border: 0;">
                            <div class="tab-pane fade show active" id="sass" role="tabpanel" aria-labelledby="pick-tab">
                              <div class="card-body ">
                                <form action="searchcab.php" autocomplete="off">
                                  <div class="form-group">
                                    <input class="form-control" id="autoCompletePlace" type="text" name="place" placeholder="Pickup From Airport">
                                  </div>

                                  <div class="form-group">
                                    <input class="form-control" id="autoCompletePlace8" type="text" name="place2" placeholder="Drop Destination City">
                                  </div>
                                  <div class="form-group">
                                    <label class="form-label" for="pickDate">Pickup Date</label>
                                    <input class="form-control" id="pickDate" type="date">
                                    </div>
                                    <div class="form-group">
                                    <label class="form-label" for="pickTime">Pickup Time</label>
                                    <input class="form-control" id="pickTime" type="time">
                                    </div>
                                  <div class="form-group">
                                  <a class="btn btn-creative btn-light p-2" href="searchcab.php">Search Cab</a>
                                  </div>
                                </form>
                              </div>
                            </div>
                            <div class="tab-pane fade show" id="npm" role="tabpanel" aria-labelledby="drop-tab">
                              <div class="card-body ">
                                <form action="searchcab.php" autocomplete="off">
                                  <div class="form-group">
                                    <input class="form-control" id="autoCompletePlace9" type="text" name="place" placeholder="Pickup City">
                                  </div>

                                  <div class="form-group">
                                    <input class="form-control" id="autoCompletePlace2" type="text" name="place2" placeholder="Drop at Airport">
                                  </div>
                                  <div class="form-group">
                                    <label class="form-label" for="pickDate">Pickup Date</label>
                                    <input class="form-control" id="pickDate" type="date">
                                    </div>
                                    <div class="form-group">
                                    <label class="form-label" for="pickTime">Pickup Time</label>
                                    <input class="form-control" id="pickTime" type="time">
                                    </div>
                                  <div class="form-group">
                                  <a class="btn btn-creative btn-light p-2" href="searchcab.php">Search Cab</a>
                                  </div>
                                </form>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="pt-2"></div> 
      
      <div class="container">
        <div class="card bg-primary mb-3 bg-img" style="background-image: url('img/core-img/1.png')">
          <div class="card-body direction-rtl p-3">
            <h2 class="text-white">Enquiry Now</h2>
            <form action="#" method="GET">
              <div class="form-group">
                <input class="form-control" id="exampleInputText" type="text" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input class="form-control" id="exampleInputNumber" type="tel" placeholder="Phone Number">
              </div>
              <div class="form-group">
                <input class="form-control" id="exampleInputemail" type="email" placeholder="Email Address">
              </div>
              <div class="form-group">
                <input class="form-control" id="exampleInputText38" type="text" placeholder="Message">
              </div>
              <button class="btn btn-warning w-100 d-flex align-items-center justify-content-center" type="button">Send Message
                <svg class="bi bi-arrow-right-short" width="24" height="24" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                </svg>
              </button>
            </form>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="card">
          <div class="card-body">
            <div class="accordion accordion-flush accordion-style-one" id="accordionStyle1">
              <!-- Single Accordion -->
              <div class="accordion-item">
                <div class="accordion-header" id="accordionOne">
                  <h6 data-bs-toggle="collapse" data-bs-target="#accordionStyleOne" aria-expanded="true" aria-controls="accordionStyleOne">Quick & Easy Booking<i class="bi bi-chevron-down"></i></h6>
                </div>
                <div class="accordion-collapse collapse show" id="accordionStyleOne" aria-labelledby="accordionOne" data-bs-parent="#accordionStyle1">
                  <div class="accordion-body">
                    <p class="mb-0">We are here to provide you hazzle free, quickest and user friendly cab booking platform to book your taxi / cab quickly. You can book it 24 X 7 in 365 Dyas.</p>
                  </div>
                </div>
              </div>
              <!-- Single Accordion -->
              <div class="accordion-item">
                <div class="accordion-header" id="accordionTwo">
                  <h6 class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordionStyleTwo" aria-expanded="false" aria-controls="accordionStyleTwo">Doorstep Pickup & Drop<i class="bi bi-chevron-down"></i></h6>
                </div>
                <div class="accordion-collapse collapse" id="accordionStyleTwo" aria-labelledby="accordionTwo" data-bs-parent="#accordionStyle1">
                  <div class="accordion-body">
                    <p class="mb-0">It Dosent matter where you stay in City. Inside, Outside or we have to take you from the airport. Our cab is ready to pickup or drop you from/at your doorstep.</p>
                  </div>
                </div>
              </div>
              <!-- Single Accordion -->
              <div class="accordion-item">
                <div class="accordion-header" id="accordionThree">
                  <h6 class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordionStyleThree" aria-expanded="false" aria-controls="accordionStyleThree">On Time Cab Arrival<i class="bi bi-chevron-down"></i></h6>
                </div>
                <div class="accordion-collapse collapse" id="accordionStyleThree" aria-labelledby="accordionThree" data-bs-parent="#accordionStyle1">
                  <div class="accordion-body">
                    <p class="mb-0">With using latest technologies our Drivers and GPS Enabled Taxis are always ready to Pick you from your Doorstep and drop you at your destination On-Time.</p>
                  </div>
                </div>
              </div>
              <!-- Single Accordion -->
              <div class="accordion-item">
                <div class="accordion-header" id="accordionFour">
                  <h6 class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordionStyleFour" aria-expanded="false" aria-controls="accordionStyleFour">Experienced Cab Drivers<i class="bi bi-chevron-down"></i></h6>
                </div>
                <div class="accordion-collapse collapse" id="accordionStyleFour" aria-labelledby="accordionFour" data-bs-parent="#accordionStyle1">
                  <div class="accordion-body">
                    <p class="mb-0">Our all drivers are trained & passed with different driving parameters for highway driving. They all are well experienced, well behaved and best cutomer ratings holders.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="pb-3"></div>

      <div class="container px-0">
        <div class="tiny-slider-three-wrapper">
          <div class="tiny-slider-three">
            <!-- Single Hero Slide -->
            <div>
              <div class="single-hero-slide bg-img" style="background-image: url('img/bg-img/dsire.jpg')">
                <div class="slide-content">
                  <h2 class="text-dark"></h2>
                  <h1 class="text-dark fw-bold pb-5"></h1>
                </div><a class="btn btn-creative btn-light mt-5" href="#">Book Now</a>
              </div>
            </div>
            <!-- Single Hero Slide -->
            <div>
              <div class="single-hero-slide bg-img" style="background-image: url('img/bg-img/ertiga.jpg')">
                <div class="slide-content">
                  <h2 class="text-dark"></h2>
                  <h1 class="text-dark fw-bold pb-5"></h1>
                </div><a class="btn btn-creative btn-light mt-5" href="#">Book Now</a>
              </div>
            </div>
            <!-- Single Hero Slide -->
            <div>
              <div class="single-hero-slide bg-img" style="background-image: url('img/bg-img/innova.jpg')">
                <div class="slide-content">
                  <h2 class="text-dark"></h2>
                  <h1 class="text-dark fw-bold pb-5"></h1>
                </div><a class="btn btn-creative btn-light mt-5" href="#">Book Now</a>
              </div>
            </div>
            <div>
              <div class="single-hero-slide bg-img" style="background-image: url('img/bg-img/tempo.jpg')">
                <div class="slide-content">
                  <h2 class="text-dark"></h2>
                  <h1 class="text-dark fw-bold pb-5"></h1>
                </div><a class="btn btn-creative btn-light mt-5" href="#">Book Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="pb-3"></div>

      <div class="container">
        <div class="card p-3">
          <div class="card-body">
            <h3>Customer Review</h3>
            <div class="testimonial-slide-three-wrapper">
              <div class="testimonial-slide3 testimonial-style3">
                <!-- Single Testimonial Slide -->
                <div class="single-testimonial-slide">
                  <div class="text-content"><span class="d-inline-block badge bg-warning mb-2"><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill"></i></span>
                    <h6 class="mb-2">Very Professional Service and On time Pickup Drop. Excellent. I recommend.</h6><span class="d-block">Jay Shah, Ahmedabad</span>
                  </div>
                </div>
                <!-- Single Testimonial Slide -->
                <div class="single-testimonial-slide">
                  <div class="text-content"><span class="d-inline-block badge bg-warning mb-2"><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill"></i></span>
                    <h6 class="mb-2">Good Service, Very Good Driver, Would Definetly Recomanded and Will Surely Book Again.</h6><span class="d-block">Swati Vegadiya, Rajkot</span>
                  </div>
                </div>
                <!-- Single Testimonial Slide -->
                <div class="single-testimonial-slide">
                  <div class="text-content"><span class="d-inline-block badge bg-warning mb-2"><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill"></i></span>
                    <h6 class="mb-2">Awesome Cab! <br> Excellent Driving!</h6><span class="d-block">Neha Utekar, Mumbai</span>
                  </div>
                </div>
                <!-- Single Testimonial Slide -->
                <div class="single-testimonial-slide">
                  <div class="text-content"><span class="d-inline-block badge bg-warning mb-2"><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill"></i></span>
                    <h6 class="mb-2">They are very reliable, friendly and also accepts online payments.</h6><span class="d-block">Ruhi Swarnakar, Jodhpur</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include 'footer.php'; ?>
  </body>

</html>