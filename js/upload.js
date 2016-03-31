function dropdownlist(listindex) {
	document.formname.topic.options.length = 0;
	switch(listindex) {
		case "Computer Science":
		document.formname.topic.options[0] = new Option("Select topic:", "");
		document.formname.topic.options[1] = new Option("Other", "Other");
		break;

		case "Statistics":
		document.formname.topic.options[0] = new Option("Select topic:", "");
		document.formname.topic.options[1] = new Option("Exploring Data", "Exploring Data");
		document.formname.topic.options[2] = new Option("Data Distributions", "Data Distributions");
		document.formname.topic.options[3] = new Option("Relationships", "Relationships");
		document.formname.topic.options[4] = new Option("Studies", "Studies");
		document.formname.topic.options[5] = new Option("Probability", "Probability");
		document.formname.topic.options[6] = new Option("Random Variables", "Random Variables");
		document.formname.topic.options[7] = new Option("Sampling Distributions", "Sampling Distributions");
		document.formname.topic.options[8] = new Option("Estimating With Confidence", "Estimating With Confidence");
		document.formname.topic.options[9] = new Option("Testing Claims", "Testing Claims");
		document.formname.topic.options[10] = new Option("Comparing Two Populations or Groups", "Comparing Two Populations or Groups");
		document.formname.topic.options[11] = new Option("Inference for Distributions of Categorical Data", "Inference for Distributions of Categorical Data");
		document.formname.topic.options[12] = new Option("Regression", "Regression");
		document.formname.topic.options[13] = new Option("Other", "Other");
		break;

		case "Calculus":
		document.formname.topic.options[0] = new Option("Select topic:", "");
		document.formname.topic.options[1] = new Option("Limits", "Limits");
		document.formname.topic.options[2] = new Option("Differentiation", "Differentiation");
		document.formname.topic.options[3] = new Option("Applications of Differentiation", "Applications of Differentiation");
		document.formname.topic.options[4] = new Option("Integration", "Integration");
		document.formname.topic.options[5] = new Option("Transcendental Functions", "Transcendental Functions");
		document.formname.topic.options[6] = new Option("Differential Equations", "Differential Equations");
		document.formname.topic.options[7] = new Option("Applications of Integration", "Applications of Integration");
		document.formname.topic.options[8] = new Option("Integration Techniques, Indeterminate Forms, and Improper Integrals", "Integration Techniques, Indeterminate Forms, and Improper Integrals");
		document.formname.topic.options[9] = new Option("Infinite Series", "Infinite Series");
		document.formname.topic.options[10] = new Option("Conics, Parametric Equations, and Polar Coordinates", "Conics, Parametric Equations, and Polar Coordinates");
		document.formname.topic.options[11] = new Option("Other", "Other");
		break;

		case "Algebra":
		document.formname.topic.options[0] = new Option("Select topic:", "");
		document.formname.topic.options[1] = new Option("One Variable Equations", "One Variable Equations");
		document.formname.topic.options[2] = new Option("Other", "Other");
		break;

		case "Geometry":
		document.formname.topic.options[0] = new Option("Select topic:", "");
		document.formname.topic.options[1] = new Option("Triangles", "Triangles");
		document.formname.topic.options[2] = new Option("Other", "Other");
		break;

		case "Trigonometry":
		document.formname.topic.options[0] = new Option("Select topic:", "");
		document.formname.topic.options[1] = new Option("Trigonometric Identities", "Trigonometric Identities");
		document.formname.topic.options[2] = new Option("Other", "Other");
		break;

		case "Pre-Calculus":
		document.formname.topic.options[0] = new Option("Select topic:", "");
		document.formname.topic.options[1] = new Option("Matrices", "Matrices");
		document.formname.topic.options[2] = new Option("Other", "Other");
		break;

		case "Chemistry":
		document.formname.topic.options[0] = new Option("Select topic:", "");
		document.formname.topic.options[1] = new Option("Entropy", "Entropy");
		document.formname.topic.options[2] = new Option("Intermolecular Forces", "Intermolecular Forces");
		document.formname.topic.options[3] = new Option("Other", "Other");
		break;

		case "Biology":
		document.formname.topic.options[0] = new Option("Select topic:", "");
		document.formname.topic.options[1] = new Option("Endocrine System", "Endocrine System");
		document.formname.topic.options[2] = new Option("Other", "Other");
		break;

		case "Physics":
		document.formname.topic.options[0] = new Option("Select topic:", "");
		document.formname.topic.options[1] = new Option("Momentum", "Momentum");
		document.formname.topic.options[2] = new Option("Other", "Other");
		break;
		
		case "Literature":
		document.formname.topic.options[0] = new Option("Select topic:", "");
		document.formname.topic.options[1] = new Option("Composition", "Composition");
		document.formname.topic.options[2] = new Option("Other", "Other");
		break;

		case "Language":
		document.formname.topic.options[0] = new Option("Select topic:", "");
		document.formname.topic.options[1] = new Option("Allusions", "Allusions");
		document.formname.topic.options[2] = new Option("Other", "Other");
		break;

		case "United States History":
		document.formname.topic.options[0] = new Option("Select topic:", "");
		document.formname.topic.options[1] = new Option("Pre-Columbian Era", "Pre-Columbian Era");
		document.formname.topic.options[2] = new Option("Colonial Period", "Colonial Period");
		document.formname.topic.options[3] = new Option("18th Century", "18th Century");
		document.formname.topic.options[4] = new Option("American Revolution", "American Revolution");
		document.formname.topic.options[5] = new Option("Confederation and Constitution", "Confederation and Constitution");
		document.formname.topic.options[6] = new Option("Slavery", "Slavery");
		document.formname.topic.options[7] = new Option("Jeffersonian Republican Era", "Jeffersonian Republican Era");
		document.formname.topic.options[8] = new Option("War of 1812", "War of 1812");
		document.formname.topic.options[9] = new Option("Era of Good Feelings", "Era of Good Feelings");
		document.formname.topic.options[10] = new Option("Indian Removal", "Indian Removal");
		document.formname.topic.options[11] = new Option("Second Great Awakening", "Second Great Awakening");
		document.formname.topic.options[12] = new Option("Abolitionism", "Abolitionism");
		document.formname.topic.options[13] = new Option("Westward Expansion and Manifest Destiny", "Westward Expansion and Manifest Destiny");
		document.formname.topic.options[14] = new Option("Civil War", "Civil War");
		document.formname.topic.options[15] = new Option("Reconstruction and the Gilded Age", "Reconstruction and the Gilded Age");
		document.formname.topic.options[16] = new Option("Progressive Era", "Progressive Era");
		document.formname.topic.options[17] = new Option("Imperialism", "Imperialism");
		document.formname.topic.options[18] = new Option("World War I", "World War I");
		document.formname.topic.options[19] = new Option("Suffrage for Women", "Suffrage for Women");
		document.formname.topic.options[20] = new Option("Roaring Twenties and the Great Depression", "Roaring Twenties and the Great Depression");
		document.formname.topic.options[21] = new Option("World War II", "World War II");
		document.formname.topic.options[22] = new Option("Cold War", "Cold War");
		document.formname.topic.options[23] = new Option("Progressive Era", "Progressive Era");
		document.formname.topic.options[24] = new Option("War on Terror", "War on Terror");
		document.formname.topic.options[25] = new Option("The Great Recession", "The Great Recession");
		document.formname.topic.options[26] = new Option("Other", "Other");
		break;

		case "European History":
		document.formname.topic.options[0] = new Option("Select topic:", "");
		document.formname.topic.options[1] = new Option("Classical Antiquity", "Classical Antiquity");
		document.formname.topic.options[2] = new Option("Middle Ages", "Middle Ages");
		document.formname.topic.options[3] = new Option("Renaissance", "Renaissance");
		document.formname.topic.options[4] = new Option("Exploration and Trade", "Exploration and Trade");
		document.formname.topic.options[5] = new Option("Reformation", "Reformation");
		document.formname.topic.options[6] = new Option("Mercantilism and Colonial Expansion", "Mercantilism and Colonial Expansion");
		document.formname.topic.options[7] = new Option("Crisis of the 17th Century", "Crisis of the 17th Century");
		document.formname.topic.options[8] = new Option("Enlightenment", "Enlightenment");
		document.formname.topic.options[9] = new Option("Revolution to Imperialism", "Revolution to Imperialism");
		document.formname.topic.options[10] = new Option("World Wars and Cold War", "World Wars and Cold War");
		document.formname.topic.options[11] = new Option("Other", "Other");
		break;

		case "Economy":
		document.formname.topic.options[0] = new Option("Select topic:", "");
		document.formname.topic.options[1] = new Option("Income Distribution", "Income Distribution");
		document.formname.topic.options[2] = new Option("Macroeconomics", "Macroeconomics");
		document.formname.topic.options[3] = new Option("Other", "Other");
		break;

		case "Government":
		document.formname.topic.options[0] = new Option("Select topic:", "");
		document.formname.topic.options[1] = new Option("Socialism", "Socialism");
		document.formname.topic.options[2] = new Option("Other", "Other");
		break;

		case "World History":
		document.formname.topic.options[0] = new Option("Select topic:", "");
		document.formname.topic.options[1] = new Option("China", "China");
		document.formname.topic.options[2] = new Option("Other", "Other");
		break;

		case "Spanish":
		document.formname.topic.options[0] = new Option("Select topic:", "");
		document.formname.topic.options[1] = new Option("Imperfecto del subjuntivo", "Imperfecto del subjuntivo");
		document.formname.topic.options[2] = new Option("Other", "Other");
		break;
	}
	return true;
}
