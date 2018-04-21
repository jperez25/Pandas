<!-- Sidebar -->
<div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <h3 style="color: #fff">
                        Lucky Panda
                    </h3>
                </li>
                <li>
                    {{ Form::open(array('action' => array('DishesTableController@index'), 'method' => 'get', 'id'=>'dishes-form')) }}
                        <a id='dishes'  onclick="event.preventDefault();
                                                document.getElementById('dishes-form').submit();">Dishes</a>
                    {{Form::close()}}
                </li>
                <li>
                    <a id='orders' onclick="displayCRUD(this.id)">Orders</a>
                </li>
                <li>
                {{ Form::open(array('action' => array('DishesTableController@index'), 'method' => 'get', 'id'=>'users-form')) }}
                        <a id='users' onclick="event.preventDefault();
                                                document.getElementById('users-form').submit();">Users</a>
                    {{Form::close()}}
                </li>
                <li>
                {{ Form::open(array('action' => array('PromotionsTableController@index'), 'method' => 'get', 'id'=>'promotions-form')) }}
                        <a id='users' onclick="event.preventDefault();
                                                document.getElementById('promotions-form').submit();">Promotions</a>
                    {{Form::close()}}
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->