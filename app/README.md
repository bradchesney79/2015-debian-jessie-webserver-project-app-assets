This directory just gets copied wholesale into the document root as the scripts that run the application.

I make this distinction-- my web application lives in a webroot which contains everything public and private.

My document root is where I put the docuemnts for the server to serve to the user.
Document root documents may make calls to any assets in the larger webroot which are otherwise private.
