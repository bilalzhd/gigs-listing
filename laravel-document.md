## Laravel main crud working (with files upload)

**first** you add a model then view and then add a controller
model will be used to add operations on a data
view will show pages
and controllers will be added to a view to run functions on the view

you can add fake data by using php artisan make:seeder NameOfTheSeeder
 the database/migrations and then 

some methods to add to a controller


**index()** that would be used to return a view
eg.
`use App\Models\Listing;
public function index(){        
        return view('listings.index', ["listings" => Listing::latest()->filter(request(['tag', 'search']))->paginate(4)]);`
 }
**create()** that would be used to show a create view
e.g `public function create(){return view('listings.create');}`

**show()** that would be used to create a single post / data
e.g `public function show(Listing $listing){
        return view('listings.show', ["listing" => $listing]);}`
**store()** that would be used to add something to the database
e.g `public function store(Request $request){
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);
        Listing::create($formFields);
        return redirect('/')->with('message', 'Listing created successfully!');}`
