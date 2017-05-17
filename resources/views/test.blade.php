<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<body>
	<a href="{{ action('RecipesController@searchResults', ['q' => ['potato']]) }}"></a>
</body>
</html>