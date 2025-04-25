use App\Models\Article;

public function index()
{
    $latestArticles = Article::latest('published_at')->take(5)->get();
    $SlatestArticles = Article::where('type', 'slate')->get(); // Adjust query as needed
    
    return view('admin.a_dashboard', [
        'latestArticles' => $latestArticles,
        'SlatestArticles' => $SlatestArticles
    ]);
}