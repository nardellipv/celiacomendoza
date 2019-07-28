<?phpnamespace celiacomendoza\Http\Controllers;use celiacomendoza\CharacteristicCommerce;use celiacomendoza\Comment;use celiacomendoza\Commerce;use celiacomendoza\Commerce_Payment;use celiacomendoza\CommercePayment;use celiacomendoza\Http\Requests\MailCustomerRequest;use celiacomendoza\Message;use celiacomendoza\Product;use celiacomendoza\Province;use Illuminate\Support\Facades\Cookie;use Illuminate\Support\Facades\Mail;use Illuminate\Support\Facades\Session;use Illuminate\Support\Facades\Storage;class CommerceController extends Controller{    public function commerce($slug)    {        $commerce = Commerce::where('slug', $slug)            ->firstOrFail();        //contador de visitas (arreglado) por local        if (Storage::exists('public/' . $commerce->user_id . '-' . $commerce->user->name)) {            $counter = Storage::get('public/' . $commerce->user_id . '-' . $commerce->user->name);            $counter += 12;            Storage::put('public/' . $commerce->user_id . '-' . $commerce->user->name, $counter);        } else {            $countRand = rand('135', '278');            Storage::put('public/' . $commerce->user_id . '-' . $commerce->user->name, $countRand);        }        $products = Product::with(['category'])            ->where('commerce_id', $commerce->id)            ->where('available', 'YES')            ->paginate(10);        $commercePayment = CommercePayment::with(['payment'])            ->where('commerce_id', $commerce->id)            ->get();        $characteristicCommerces = CharacteristicCommerce::with('characteristic')            ->where('commerce_id', $commerce->id)            ->get();        $commerceComments = Comment::where('commerce_id', $commerce->id)            ->where('status', 'ACTIVE')            ->orderBy('created_at', 'DESC')            ->paginate(5);        $province = Province::where('id', $commerce->province_id)            ->first();        $provinces = Province::orderBy('name', 'ASC')            ->get();        $relateds = Commerce::with(['region', 'province'])            ->where('province_id', $commerce->province_id)            ->where('region_id', '!=', NULL)            ->orderByRaw('RAND()')            ->take(3)            ->get();        return view('web.parts._dataCommerce', compact('commerce', 'products', 'commercePayment',            'characteristicCommerces', 'province', 'provinces', 'relateds', 'counter', 'commerceComments'));    }    public function MailCustomer(MailCustomerRequest $request, $id)    {        $commerce = Commerce::where('id', $id)            ->first();        $message = new Message;        $message->name = $request['name'];        $message->email = $request['email'];        $message->message = $request['messageCustomer'];        $message->read = 'NO';        $message->commerce_id = $id;        $message->save();        Mail::send('web.mails.MailCustomer', $request->all(), function ($msj) use ($request, $commerce) {            $msj->from('no-respond@celiacosmendoza.com', 'CeliacosMendoza');            $msj->subject('Mensaje desde celiacomendoza');            $msj->to($commerce->user->email, $commerce->user->name);        });        Session::flash('message', 'Su mensaje fue enviado correctamente. Muchas gracias!!!');        return back();    }    public function positive($slug)    {        $commerce = Commerce::where('slug', $slug)            ->first();        if (Cookie::get('voto' . $commerce->slug) == $slug) {            Session::flash('message', 'Ya votaste anteriormente a este comercio');            return back();        }        $commerce->increment('votes_positive');        $commerce->save();        Cookie::queue('voto' . $commerce->slug, $commerce->slug, '2628000');        Session::flash('message', 'Muchas gracias por tu voto');        return back();    }    public function negative($slug)    {        $commerce = Commerce::where('slug', $slug)            ->first();        if (Cookie::get('voto' . $commerce->slug) == $slug) {            Session::flash('message', 'Ya votaste anteriormente a este comercio');            return back();        }        $commerce->increment('votes_negative');        $commerce->save();        Cookie::queue('voto', $commerce->slug);        Session::flash('message', 'Muchas gracias por tu voto');        return back();    }}