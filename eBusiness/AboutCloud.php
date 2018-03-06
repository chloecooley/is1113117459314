<!-- Refer to stylesheet-->
<link rel="stylesheet" href="aboutCloud.css" type="text/css"/>

<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>About Cloud</title>
        <!--Adding Page Pilling-->
       
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        <!-- Page Pilling! -->
            <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/pagePiling.js/1.5.4/jquery.pagepiling.css" />

            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pagePiling.js/1.5.4/jquery.pagepiling.js"></script>
            
        <script type ="text/javascript">
        $(document).ready(function() {
	    $('#pagepiling').pagepiling();
        });
         </script>
        
       
   
    </head>
    
    <body>
    
    <!--Adding section to page piling--> 
       <div id="pagepiling">
    <div class="section" id="section1">
        <!-- https://pixabay.com/en/photos/storm%20clouds/?image_type=illustration <- Adjusted that image-->
    <p></p>
    </div>
    
    <div class="section" id="section1">
    <h1>Clouds of Code</h1>
    <h2>Where we are based:</h2>
    <p>We are based in South Cork and have small offices in Dublin, Mayo, Waterford, and Sligo.</p>
    <h2>Who are we:</h2>
    <p>Clouds of Code is a cloud service vendor. We offer a range of online services to our customers: Gmail, Amazon Web Services (AWS), Salesforce, and Cloud 9.
    We value our customers and offer these services at competitive prices, we believe in making the world of the cloud accessible to everyone with internet access.</p>
    <h2>How to contact us:</h2>
    <p>Call us on: *** *****</p>
    <p>Email us at: CloudsOfCode@*******.***</p>
    </div>
	
	<div class="section"  id= "section2">Software as a Service (SaaS) - <a href="https://www.salesforce.com/eu/?ir=1" target="_blank">Salesforce</a>
	
    <!--Info about salesforce-->
    <!--Info gotten from -> http://searchcloudcomputing.techtarget.com/definition/Software-as-a-Service -->
    <p>Software as a service (SaaS) is a software distribution model in which a third-party provider hosts applications and makes them available to customers over 
    the Internet.</p>
    <p>SaaS is one of three main categories of cloud computing, alongside infrastructure as a service (IaaS) and platform as a service (PaaS).</p>
    <p>SaaS removes the need for organizations to install and run applications on their own computers or in their own data centers. This eliminates 
    the expense of hardware acquisition, provisioning and maintenance, as well as software licensing, installation and support. </p>
   <!--Info gotten form -> https://en.wikipedia.org/wiki/Salesforce.com -->
    <p>Salesforce is the primary enterprise offering within the Salesforce platform.</p>
    <p>It provides companies with an interface for case management and task management, and a system for automatically routing and escalating important events.</p>
    <p>The Salesforce customer portal provides customers the ability to track their own cases, includes a social networking plug-in that enables the 
    user to join the conversation about their company on social networking websites, provides analytical tools and other services including email alert, 
    Google search, and access to customers' entitlement and contracts.</p>

    <img src="http://www.stickpng.com/assets/images/58482f67cef1014c0b5e4a81.png" height="250px" width="400px"></img>
    </div>
  
  

	<div class="section"  id= "section3">Platform as a Service (PaaS) - <a href="c9.io" target="_blank">Cloud 9</a>
	
    <!--Info about cloud9-->
    <!--Info gotten from -> https://en.wikipedia.org/wiki/Platform_as_a_service -->
    <p>Platform as a Service (PaaS) or application platform as a Service (aPaaS) or platform base service is a category of cloud computing services that provides a platform allowing
    customers to develop, run, and manage applications without the complexity of building and maintaining the infrastructure typically associated with developing and launching an app</p>
    <p>PaaS can be delivered in three ways: as a public cloud service from a provider, where the consumer controls software deployment with minimal configuration options, and the provider 
    provides the networks, servers, storage, operating system (OS), middleware (e.g. Java runtime, .NET runtime, integration, etc.), database and other services to host the consumer's
    application; as a private service (software or appliance) inside the firewall; or as software deployed on a public infrastructure as a service.</p>
    <p>The advantages of PaaS are primarily that it allows for higher-level programming with dramatically reduced complexity; the overall development of the application can be more
    effective, as it has built-in infrastructure; and maintenance and enhancement of the application is easier. 
    It can also be useful in situations where multiple developers are working on a single project involving parties who are not located nearby.</p>
    <p>One disadvantage of PaaS offerings is that developers may not be able to use a full range of conventional tools (e.g. relational databases, 
    with unrestricted joins). Another possible disadvantage is being locked in to a certain platform. However, most PaaSes are relatively lock-in free</p>
    <img src="https://www.vectorlogo.zone/logos/c9/c9-card.png"></img>
    </div> 
    
     <div class="section"  id= "section4">Infrastructure as a service (IaaS) - <a href="https://aws.amazon.com/about-aws/" target="_blank">Amazon Web Services (AWS)</a>
    <!--Info gotten from -> http://searchcloudcomputing.techtarget.com/definition/Infrastructure-as-a-Service-IaaS -->
    <p>Infrastructure as a service (IaaS) is a form of cloud computing that provides virtualized computing resources over the internet. 
    IaaS is one of the three main categories of cloud computing services, alongside software as a service (SaaS) and platform as a service (PaaS).</p> 
    <p>The IaaS provider also supplies a range of services to accompany those infrastructure components. These can include detailed billing, monitoring, log access, 
    security, load balancing and clustering, as well as storage resiliency, such as backup, replication and recovery. These services are increasingly policy-driven, 
    enabling IaaS users to implement greater levels of automation and orchestration for important infrastructure tasks.</p>
    <!--Info gotten from -> https://aws.amazon.com/what-is-aws/ -->
    <p>Amazon Web Services (AWS) is a secure cloud services platform, offering compute power, database storage, content delivery and other functionality to help
    businesses scale and grow. Explore how millions of customers are currently leveraging AWS cloud products and solutions to build sophisticated applications with 
    increased flexibility, scalability and reliability</p>
    <p>The AWS Cloud provides a broad set of infrastructure services, such as computing power, storage options, networking and databases, delivered as a utility: 
    on-demand, available in seconds, with pay-as-you-go pricing.</p>
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1d/AmazonWebservices_Logo.svg/2000px-AmazonWebservices_Logo.svg.png" height="200px" width="400px"></img>
    
    </div>
   

     <div class="section"  id= "section5">Communication as a Service (CaaS) - <a href="https://www.google.com/gmail/about/" target="_blank">Gmail</a>
    <!--Info gotten from -> http://whatis.techtarget.com/definition/Communications-as-a-Service-CaaS -->
    <p>Communications as a Service (CaaS) is an outsourced enterprise communications solution that can be leased from a single vendor. Such communications can include voice over IP
    (VoIP or Internet telephony), instant messaging (IM), collaboration and videoconference applications using fixed and mobile devices. CaaS has evolved along the same lines as 
    Software as a Service (SaaS).</p> 
    <!--Info gotten from -> https://www.techopedia.com/definition/16031/communications-as-a-service-caas -->
    <p>The core concept of CaaS is that accessing these services over the internet is extremely convenient. The client businesses do not have to worry about 
    maintaining servers and connections, uploading different kinds of content or doing all of the administrative work involved in keeping a communications platform functional.</p>
    <!--Info gotten from ->http://searchmicroservices.techtarget.com/definition/Gmail  -->
    <p>Gmail (pronounced Gee-mail) is a free Web-based e-mail service currently being tested at Google that provides users with a gigabyte of storage for messages and provides
    the ability to search for specific messages. The Gmail program also automatically organizes successively related messages into a conversational thread.</p>
    <p>According to Google co-founder and president Larry Page, the company was inspired to create Gmail because of a user's letter complaining about problems with existing 
    Web e-mail services, such as the constant need to delete messages to stay within storage limits, and the lack of any searching ability.</p>
    <img src="http://www.stickpng.com/assets/images/5847fafdcef1014c0b5e48ce.png" height="250px" width="260px"></img>
         </br>
         </br>
         </br>
           <!-- Link back to eBusiness -->
         <a href="Ebus1.php" class="btn-btn-dark" font-size="30px">Buy One of these Products</a>
         <br/>
           <!-- Link back to homepage -->
         <a href="../homepage.html" class="btn-btn-success">Home</a>
     </div>
</body>
</html>