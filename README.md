# Event-Registration-Backend-Challenge-
Develop a pseudo Backend Web Application for Event Registration. This is primarily a backend challenge, your frontend can be very minimal.

[Ideal Behaviour]

On Front End :

— Your web app should ask users to fill up their details for event registration.

— Once the details are provided, they should be able to preview it on a different screen before submitting.

— Once submitted show the registration number on the success screen.

— Should provide admin login.

— Should provide UI for Admin level operations mentioned below.

 

On Back End:

— You have to create all the database schema to support all the desired features.

— Receive all the event registration details from the Front End and store them in a database.

— Generate Registration Number for the request and store it in database.

— Render different types of requests like for the event registration, data for Admin etc.

 

[Minimum Requirement]

On Front End :

— Create a form on the UI which captures :

 

          Fields for Data Capture (All fields are mandatory)

                              Full Name

                              Mobile

                              E-Mail

                              Upload ID Card (Formats: png, jpeg)

                              Registration type : Self/Group/Corporate/Others

                              No of Tickets: (If self prepopulate to 1, rest case mandate user to enter. Make this field optional)

— Provide a preview Screen which should :

 

                              List all the fields as above.

                              Display ID card in the preview.

 

— On Submission :

                            Registration ID has to be generated and displayed on Success Screen.

                            Store all the information captured in a local database.

    (Registration Date has to be generated as system date and get stored in Database)

 

On Back end:

— Implement the backend in one of the desired Tech Stack provided below.

— This Backend should have database bindings to store the event registration info received from the Front End.

— The backend should be able to receive from and render to Front End all the event information, also store in and fetch from the database.

— Submit Screenshot, Source code & Instructions.


[Plus Point]

— Along with everything asked in Minimum Requirement :

Admin Application

Admin Login functionality.

Display a Chart detailing count of Registration types.

List all Registrations (Registration No, Date, Name fields should be displayed)

Hyperlink to view on Click on Registration No., show the full details of the registration.

—  Allow both user and admin to modify the event data(like changing date or time ) coming from the front end but only the admin can delete an event.

— Documented, well structured beautified code.

— Awesome if you could manage to host this application somewhere with Demo URL!

(Amazon aws, heroku or openshift)


[Extra Work]

Along with everything from the above two levels :

— Event Registration : Allow users to create their own events.

Capture fields like : event name, date, time , event type, location.

— Implement a feature to search Events based on date, time , event type, location in a combination of atleast two or more.

— Custom elegant design, fonts and icons to make web app more user-friendly.

— You may add portfolio activity comprising awesome work you have done on web  applications.

— Use your imagination and add features which would make things easier for end users.

Note: If you complete any or all of the above mentioned levels please do submit.


[Ideal Stack]

 

Front End : HTML 5, CSS 3, and JavaScript.

Back End :Java: JavaEE, Java Spring Framework, JBoss, JBoss Rules & Workflows

Database : Mysql, MSSQL, Oracle etc.


— Include Content Headers in your backend :

HTTP Header

- access-control-allow-headers:Origin, X-Requested-With, Content-Type, Accept

- access-control-allow-methods: GET, POST, PUT

- access-control-allow-origin: *

- server: cloudflare-nginx
