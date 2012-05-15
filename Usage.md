Configuration :

-In ProjetName/BundleName/Ressources/config/services.yml
 	services:
	    project_bundle.custom_servicename:
	    class: ProjectName\BundleName\Services\TwigPhpDateService


Usage:

-In controller :
    public sampleAction(){
	$tools = $this->container->get('project_bundle.custom_servicename');
	$tools->setDate("2012-05-01");
	return $this->render('sample.html.twig', array('tools'=>$mprotools));

    }	
-In sample.html.twig :

	{% set date=tools.getMonthYear %}
	{% set date = tools.tooldate("d-m-Y",tools.toolmktime(0,0,0,date['month'],i,date['year'])) %}
	
   				
