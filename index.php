<!DOCTYPE html>
<html lang="en">
<head>
    <title>Capstone Final Project</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    
    <!-- Bootstrap CSS  v4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="">
        <h1 align=center>Data Science Capstone Project</h1>
        <h1 align=center>A Comparison of Dallas and Fort Worth Neighborhoods</h1>
        
    </header>
    <nav class="navbar navbar-expand-md justify-content-center sticky-top  mt-5" role="navigation">
        <div class="navbar-nav d-flex justify-content-center bg-primary">
            <a href="#introduction" role="presentation" class ="nav-item nav-link border border-white text-white rounded m-1 p-1">Introduction</a>
            <a href="#data" role="presentation" class ="nav-item nav-link border border-white text-white rounded m-1 p-1">Data</a>
            <a href="#methodology" role="presentation" class ="nav-item nav-link border border-white text-white rounded m-1 p-1">Methodology</a>
            <a href="#results" role="presentation" class ="nav-item nav-link border border-white text-white rounded m-1 p-1">Results</a>
            <a href="#discussion" role="presentation" class ="nav-item nav-link border border-white text-white rounded m-1 p-1">Discussion</a>
            <a href="#conclusion" role="presentation" class ="nav-item nav-link border border-white text-white rounded m-1 p-1">Conclusion</a>
        </div>                
    </nav>
    <div class="">            
        <a name="introduction"></a>
        <h2 class="col-sm-12"><i class="fa fa-star-o"></i> <u>Introduction</u></h2>
            <p>It is often said that Dallas is where the east ends and Fort Worth is where the west begins. Certainly, 
                it is true that when you think of Fort Worth, 
                you think of pickup trucks and cowboy boots and Billy Bob's at the Fort Worth Stockyards and when you think of Dallas, 
                you think of BMW's and banking and Highland Park. The question for someone considering moving to the DFW area, 
                though, is: is there a difference in the neighborhoods in Fort Worth and Dallas?
                <br><br>
                <b>This project will investigate whether there are any systematic differences in Dallas vs. Fort Worth nighborhoods.</b></p>
    </div>
    <div class="">
        <a name="data"></a>
        <h2 class="col-sm-12"><i class="fa fa-cubes"></i> <u>Data</u></h2>
            <!-- The zillow icon size is 250 x 52 -->
            <h4><img src="image/Zillow_Wordmark_Blue_RGB.png" alt="Zillow" style="float:left;width:70px;height:15px"> <b> Neighborhoods:  </b></h3>
            <p> 
                The geodata used for this project is from the Zillow US Neighborhoods dataset.
                The dataset has over 17,300 neighboorhood boundaries in the largest cities in the U.S.  
                The Zillow data team used various tactics to collect the data, including calling individual chambers of commerce, tourism and convention boards, speaking with real estate agents and community members in these areas, as well as using available online local sources.
                <br><br>
                The Zillow dataset contains full geoshape data for each neighborhood
                as well as properties sections that contain the neighborhood name, regionid, a two-dimensional geopoint, city, county and state.
                <br><br>
                Zillow makes this data available for free under a Creative Commons licence. All that is required to use the files is to attribute Zillow as the source
                of the data and make any updates or change you make to the files available to everyone else via the same or similar license.
                The data can be downloaded at the <a href="https://data.opendatasoft.com/explore/dataset/zillow-neighborhoods%40public/export/" 
                target="_blank">opendatasoft website <i class="fa fa-download"></i></a>.
                <br><br>
                The data is available in a variety of formats including csv (comma-separated values), JSON (JavaScript Object Notation), Excel,
                 GeoJSON, Shapefile and KML (Keyhole Markup Language).  We used GeoJSON files.   
                GeoJSON is an open standard format based on the JSON that was designed for representing simple geographical features, along with their non-spatial attributes. 
                <br><br></p>

            <h4><i class="fa fa-foursquare"></i> <b>Place Data</b> by <b>Foursquare:</b>  </h3>
            <p>Information about the neighborhoods was collected using the Foursquare Places database.  
                The Places database has an extensive amount of venue data and user content that can be accessed using geolocation data. 
                The database contains "firmographic" data and "rich community-sourced content" for more than 60 million commercial places around the world.
                For each venue, there are over 90 attributes that can be accessed, including the venue name, address, gelocation, category as well as ratings, tips and photos. 
                <br><br>
                We focused on the information about the types of venues that are located in the neighborhoods to determine whether neighborhoods are similar or not.
            </p>
            <h4>Data Collection</h4>
            <ol>
                <li>GeoJSON files containing the neighborhood data for Dallas and Fort Worth were downloaded from the opensoftdata web site.</li>
                    <ul>
                        <li>The files were read using the geojson library and the neighborhood properties and boundary coordinates were appended to a dataframe.</li>
                        <li>The geo_point_2d column was split into Latitude and Longitude columns and that column as well as the regionid were dropped.</li>
                        <li>There are 425 neighborhoods, 225 in Fort Worth with the remainder in Dallas--
                            and it's suburbs of Carollton, Desoto, Garland, Irving, Mesquite, Plano and Richardson.</li>
                    </ul>
                <li>The neighborhood venues are collected using the Foursquare Places API.</li>                
            </ol>
    </div>
        <div>
            <a name="methodology"></a>
            <h2 class="col-sm-12"><i class="fa fa-search"></i> <u>Methodology</u></h2>
            <ol>
                <li>Neighborhood Venues</li>
                    <ul>
                        <li>The Zillow Neighborhoods can be quite granular. At the same time, neighboorhoods in some sections can be miles apart.</li>
                        <li>Since the Foursquare Places API looks for venues within a specified radius of a geopoint, we adopted a mixed solution.</li>
                          <ul>
                            <li>We used a radius of 8km (approximately 5 miles) around each neighborhood's geographical coordinate.</li>
                            <li>Then we excluded any venues that were either within the neighborhoods polygon or within 800 meters of the neighborhood's 
                              geographical coordinate.
                            </li>
                            <li>If there were no venues that met that definition, the neighborhood was assigned a "venue" of "Residential".</li>
                          </ul>                  
                        <!-- <li>238 of the neighborhoods had no venues within their neighborhood boundaries.</li> -->                        
                        <!-- <li>That left 66 neighborhoods classified as solely residential</li> -->
                        <li>
                          <div>
                              <iframe src="DFW_Neighborhoods.html" title="DFW Neighborhoods" width="80%" height="500" style="border:1px solid black;"></iframe>
                          </div>
                        </li>
                    </ul>
                <li>K-means Clustering</li>
                    <ul>
                        <li>We used K-means clustering using venue concentrations to identify similar neighborhoods.
                            K-means clustering is a "go to" method because of its simplicity and speed.
                        </li>
                        <li>Pros:</li>
                            <ol>
                                <li>It is fast and efficient.</li>
                                <li>It is a technique geared to work on unlabeled data.</li>
                                <li>It is an iterative technique.</li>
                            </ol>
                        <li>Cons:</li>
                            <ol>
                                <li>You must understand the context of your data well.</li>
                                <li>You have to choose your own value of k, the number of clusters.</li>
                                <li>It doesn't deal well with outliers.</li>
                            </ol>
                    </ul>
                <li>Venue Categories as the target item</li>
                    <p>When we initially ran a cluster analysis on the venue categories (map below), the residential neighborhoods
                        were readily identifiable.  There were a handful of neighborhoods that had golf courses, 
                        a few that only had parks,
                        and some that only had convenience or discount stores.  
                        But almost two-thirds of the neighborhoods were grouped into a large cluster 
                        that could best be characterized as have "a little bit of everything".  Trying to spot a common theme for this large cluster
                        drew our attention to the "granularity" of the venue categories.  Do we really want to split out Mexican Cuisine into 
                        Mexican Restaurant, Tex-Mex Restaurant, Burrito Place and Taco Place?  Aren't bars, beer bars, cocktail bars, dive bars, gay bars,
                        hotel bars, wine bars, lounges, and pubs all "drinking establishments"?  Is anything gained by distinguishing between Gyms,
                        Boxing Gyms, Gymnastics Gyms and Gym/Fitness Centers?                     
                    </p>
                    <div>
                        <iframe src="DFW_by_VenueCategory.html" title="DFW Neighborhoods by Venue Category" width="80%" height="500" style="border:1px solid black;"></iframe>
                    </div>
                    
                        <li>Defined "Venue Groups" to reduce the granularity</li>
                        <p>
                            It was decided that rather than specifying different categories of restaurants, it was better to specity the cuisine, 
                            e.g. Mexican Cuisine, Asian Cuisine, French Cuisine, Italian Cuisine, etc.
                            <br><br>
                            We also grouped types of venues, such as Athletic Venues and Shopping Venues.
                            Without being exhaustive, we grouped the obvious venue categories into more inclusive "venue groups".  The full list can be
                            found <a href="VenueGroups.html" target="_blank">here.</a>
                            <br><br>
                            One we defined the Venue Groups, we repeated the k-means cluster analysis for 8 clusters and again for 10 clusters.
                        </p>
            </ol>
        </div>
        <div class="container col-12">
            <a name="results"></a>
            <h2 class="col-sm-12"><i class="fa fa-tasks"></i> <u>Results</u></h2>
            <div class="embed-responsive" >
              <!-- <img src="kelbow_visualizer_bycategory.png" class="img-fluid rounded col-2" alt="k-elbow results by category" style="height:auto; max-width:80%"> -->
              <img src="kelbow_visualizer_bygroup.png"  class="img-fluid col-2" alt="k-elbow results by group" style="height:auto; max-width:80%">
            </div>
            <iframe src="Clusters_By_Group-9.html" title="Clusters By Group" width="80%" height="500" style="border:1px solid black;" onload="this.before((this.contentDocument.body||this.contentDocument).children[0]);this.remove()"></iframe>
            <?php include "import" href="Clusters_By_Group-9.html"?>
          <p>Below are the results of the k-means cluster analysis with eight clusters.</p>
            <!-- <div class="container">                 -->
                <iframe src="DFW_by_VenueGroup-12.html" title="DFW Neighborhoods by Venue Group" width="80%" height="500" style="border:1px solid black;"></iframe>
                <a href="DFW_by_VenueGroup-12.html" target="_blank" class="btn btn-info float-right d-inline" role="button" style="vertical-align: middle">Open in new window</a>
            <!-- </div> -->
            <!-- <div class="container"> -->
                <!-- by category:  large cluster relabled "Everything else" -->
                by group
                <h2>Cluster Results</h2>
                <table border="1" class="dataframe table table-bordered">
                  <thead>
                    <tr style="text-align: center;">
                      <th>Cluster</th>
                      <th>Color</th>
                      <th>Count By Category</th>
                      <th>Category Desc</th>
                      <th>Category File</th>
                      <th>Count By Group</th>
                      <th>Group Desc</th>
                      <th>Group File</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>0</td>
                      <td>blue</td>
                      <td>262</td>
                      <td>Mexican Restaurant</td>
                      <td><a href="Cluster-ByCategory-0-12.html"target="_blank">Cluster 0 neighborhoods</a></td>
                      <td>110</td>
                      <td>Fast-Food Venue</td>
                      <td><a href="Cluster-ByGroup-0-12.html"target="_blank">Cluster 0 neighborhoods</a></td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>purple</td>
                      <td>71</td>
                      <td>Residential</td>
                      <td><a href="Cluster-ByCategory-1-12.html"target="_blank">Cluster 1 neighborhoods</a></td>
                      <td>71</td>
                      <td>Residential</td>
                      <td><a href="Cluster-ByGroup-1-12.html"target="_blank">Cluster 1 neighborhoods</a></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>orange</td>
                      <td>2</td>
                      <td>Fried Chicken Joint</td>
                      <td><a href="Cluster-ByCategory-2-12.html"target="_blank">Cluster 2 neighborhoods</a></td>
                      <td>9</td>
                      <td>Golf Course</td>
                      <td><a href="Cluster-ByGroup-2-12.html"target="_blank">Cluster 2 neighborhoods</a></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>red</td>
                      <td>14</td>
                      <td>Convenience Store</td>
                      <td><a href="Cluster-ByCategory-3-12.html"target="_blank">Cluster 3 neighborhoods</a></td>
                      <td>10</td>
                      <td>Park</td>
                      <td><a href="Cluster-ByGroup-3-12.html"target="_blank">Cluster 3 neighborhoods</a></td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>green</td>
                      <td>16</td>
                      <td>Discount Store</td>
                      <td><a href="Cluster-ByCategory-4-12.html"target="_blank">Cluster 4 neighborhoods</a></td>
                      <td>10</td>
                      <td>Asian Cuisine</td>
                      <td><a href="Cluster-ByGroup-4-12.html"target="_blank">Cluster 4 neighborhoods</a></td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>yellow</td>
                      <td>3</td>
                      <td>Soccer Field</td>
                      <td><a href="Cluster-ByCategory-5-12.html"target="_blank">Cluster 5 neighborhoods</a></td>
                      <td>33</td>
                      <td>Drinking Establishment</td>
                      <td><a href="Cluster-ByGroup-5-12.html"target="_blank">Cluster 5 neighborhoods</a></td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>sky blue</td>
                      <td>9</td>
                      <td>Golf Course</td>
                      <td><a href="Cluster-ByCategory-6-12.html"target="_blank">Cluster 6 neighborhoods</a></td>
                      <td>15</td>
                      <td>Convenience Store</td>
                      <td><a href="Cluster-ByGroup-6-12.html"target="_blank">Cluster 6 neighborhoods</a></td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td>brown</td>
                      <td>4</td>
                      <td>Brewery</td>
                      <td><a href="Cluster-ByCategory-7-12.html"target="_blank">Cluster 7 neighborhoods</a></td>
                      <td>6</td>
                      <td>Outdoor Destination</td>
                      <td><a href="Cluster-ByGroup-7-12.html"target="_blank">Cluster 7 neighborhoods</a></td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td>pink</td>
                      <td>23</td>
                      <td>Fast Food Restaurant</td>
                      <td><a href="Cluster-ByCategory-8-12.html"target="_blank">Cluster 8 neighborhoods</a></td>
                      <td>119</td>
                      <td>Fast-Food Venue</td>
                      <td><a href="Cluster-ByGroup-8-12.html"target="_blank">Cluster 8 neighborhoods</a></td>
                    </tr>
                    <tr>
                      <td>9</td>
                      <td>gold</td>
                      <td>7</td>
                      <td>Mexican Restaurant</td>
                      <td><a href="Cluster-ByCategory-9-12.html"target="_blank">Cluster 9 neighborhoods</a></td>
                      <td>17</td>
                      <td>Fast-Food Venue</td>
                      <td><a href="Cluster-ByGroup-9-12.html"target="_blank">Cluster 9 neighborhoods</a></td>
                    </tr>
                    <tr>
                      <td>10</td>
                      <td>fuchsia</td>
                      <td>5</td>
                      <td>Trail</td>
                      <td><a href="Cluster-ByCategory-10-12.html"target="_blank">Cluster 10 neighborhoods</a></td>
                      <td>6</td>
                      <td>Mexican Cuisine</td>
                      <td><a href="Cluster-ByGroup-10-12.html"target="_blank">Cluster 10 neighborhoods</a></td>
                    </tr>
                    <tr>
                      <td>11</td>
                      <td>lime</td>
                      <td>9</td>
                      <td>Park</td>
                      <td><a href="Cluster-ByCategory-11-12.html"target="_blank">Cluster 11 neighborhoods</a></td>
                      <td>19</td>
                      <td>Shopping Venues</td>
                      <td><a href="Cluster-ByGroup-11-12.html"target="_blank">Cluster 11 neighborhoods</a></td>
                    </tr>
                  </tbody>
                </table>
              <!-- </div> -->
            <p>Below are the results of the k-means cluster analysis with ten clusters.</p>
            <div class="container">
                <iframe src="DFW_by_VenueGroup-10.html" title="DFW Neighborhoods by Venue Group" width="80%" height="500" style="border:1px solid black;"></iframe>
                <a href="DFW_by_VenueGroup-10.html" target="_blank" class="btn btn-info float-right" role="button">Open in new window</a>
            </div>
            <div class="container d-md-6">
                <h2>Clusters - 10</h2>
                <!-- <p>The .table-bordered class adds borders to a table:</p>             -->
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Cluster</th>
                      <th>Color</th>
                      <th>Number</th>
                      <th>Description</th>
                      <th>File</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>0</td>
                      <td>blue</td>
                      <td>13</td>
                      <td>Asian Cuisine</td>
                      <td><a href="Cluster-0-10.html" target="_blank">Cluster 0 neighborhoods</a></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>purple</td>
                        <td>73</td>
                        <td>Residential</td>
                        <td><a href="Cluster-1-10.html" target="_blank">Cluster 1 neighborhoods</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>orange</td>
                        <td>106</td>
                        <td>Diversified</td>
                        <td><a href="Cluster-2-10.html" target="_blank">Cluster 2 neighborhoods</a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>red</td>
                        <td>9</td>
                        <td>Golf courses</td>
                        <td><a href="Cluster-3-10.html" target="_blank">Cluster 3 neighborhoods</a></td>
                    </tr>
                    <tr>
                        <td>4</green>
                        <td>green</td>
                        <td>147</td>
                        <td>Fast Food plus</td>
                        <td><a href="Cluster-4-10.html" target="_blank">Cluster 4 neighborhoods</a></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>yellow</td>
                        <td>15</td>
                        <td>Convenience store and little else</td>
                        <td><a href="Cluster-5-10.html" target="_blank">Cluster 5 neighborhoods</a></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>sky blue</td>
                        <td>8</td>
                        <td>Outdoor Destinations</td>
                        <td><a href="Cluster-6-10.html" target="_blank">Cluster 6 neighborhoods</a></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>brown</td>
                        <td>26</td>
                        <td>Fast Food and little else</td>
                        <td><a href="Cluster-7-10.html" target="_blank">Cluster 7 neighborhoods</a></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>pink</td>
                        <td>18</td>
                        <td>Shopping</td>
                        <td><a href="Cluster-8-10.html" target="_blank">Cluster 8 neighborhoods</a></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>gold</td>
                        <td>10</td>
                        <td>Parks</td>
                        <td><a href="Cluster-9-10.html" target="_blank">Cluster 9 neighborhoods</a></td>
                    </tr>
                  </tbody>
                </table>
              
        </div>
        <div>
            <a name="discussion"></a>
            <h2 class="col-sm-12"><i class="fa fa-commenting-o"></i> <u>Discussion</u></h2>
            <ul>
              <li>Fort Worth has more diverse neighborhoods, although the northern suburbs of Dallas show more diversity than Dallas proper.</li>
            </ul>
        </div>
        <div>    
            <a name="conclusion"></a>
            <h2 class="col-sm-12"><i class="fa fa-trophy"></i> <u>Conclusion</u></h2>
            <ul>
              <li>Look for more innovative ways to group venues to capture the character of a nighborhood.</li>
              <li>Incorporate the Zillow Home Value Index.  This might be a clustering factor or could see if the venue composition could be used
                to predict home prices.
              </li>
              <li>Use more demographic data to define neighborhoods rather than using venue data or as a supplement to the venue data.</li>
            </ul>
        </div>
    

    <footer>
        <p class="container center">Data Science Capstone Project<br/>Brian Pennington</p>
    </footer>
   
  
</body>
</html>

 
