<div class="main-container">
    <div class="container">
        <div class="row">
            <!-- this (.mobile-filter-sidebar) part will be position fixed in mobile version -->
            <div class="col-md-3 page-sidebar mobile-filter-sidebar">
                <aside>
                    @include('web.parts._shopCategories')
                </aside>
            </div>
            <!--/.page-side-bar-->
            <div class="col-md-9 page-content col-thin-left">
                <div class="category-list ">
                    <div class="listing-filter">
                        <div class="pull-right col-xs-6 text-right listing-view-action"><span
                                    class="list-view active"><i class="  icon-th"></i></span> <span
                                    class="compact-view"><i class=" icon-th-list  "></i></span> <span
                                    class="grid-view "><i class=" icon-th-large "></i></span></div>
                        <div style="clear:both"></div>
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane  active " id="alladslist">
                            <div class="adds-wrapper row no-margin">
                                @foreach($products as $product)
                                    <div class="item-list">
                                        <div class="row">
                                            <div class="col-md-2 no-padding photobox">
                                                <div class="add-image">
                                                    <a href="{{ url('producto', array($commerce->id, $product->id)) }}">
                                                        <img class="thumbnail no-margin" src="{{ $product->photo }}"
                                                             alt="img">
                                                    </a>
                                                </div>
                                            </div>
                                            <!--/.photobox-->
                                            <div class="col-md-7 add-desc-box">
                                                <div class="ads-details">
                                                    <h5 class="add-title">
                                                        {{ $product->name }}
                                                    </h5>
                                                </div>
                                                <div class="card-event-info">
                                                    <p class="event-time"><i
                                                                class="fa icon-food"></i> {{ $product->category->name }}
                                                    </p>
                                                    <p class="event-location"><i class="fa icon-location"></i>
                                                        <a class="location"
                                                           href="">{{ substr($product->description,0,100) }} </a>
                                                    </p>
                                                </div>
                                            </div>
                                            <!--/.add-desc-box-->
                                            <div class="col-md-3 text-right  price-box">
                                                @if(!$product->offer)
                                                    <h2 class="item-price"> $ {{ $product->price }} </h2>
                                                @else
                                                    <h2 class="item-price">
                                                        <del> $ {{ $product->price }}</del>
                                                    </h2>
                                                    <h2 class="item-price"> $ {{ $product->offer }} </h2>
                                                @endif

                                                <a href="{{ url('producto', array($commerce->id, $product->id)) }}"
                                                   class="btn btn-secondary  btn-sm make-favorite"> <i
                                                            class="fa fa-eye"></i> <span>Detalle</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pagination-bar text-center">
                    <nav aria-label="Page navigation " class="d-inline-b">
                        {{ $products->render() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>