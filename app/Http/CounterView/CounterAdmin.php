<?phpnamespace celiacomendoza\Http\CounterView;use celiacomendoza\Commerce;use celiacomendoza\Message;use celiacomendoza\Policies\CommercePolicy;use celiacomendoza\Product;use celiacomendoza\User;use Illuminate\View\View;class CounterAdmin{    public function compose(View $view)    {        $usersCountActive = User::where('status', 'ACTIVE')            ->count();        $localActive = Commerce::where('about', '!=', NULL)            ->count();        $commerceCount = Commerce::count();        $productsCount = Product::count();        $view->with([            'usersCountActive' => $usersCountActive,            'localActive' => $localActive,            'commerceCount' => $commerceCount,            'productsCount' => $productsCount,        ]);    }}