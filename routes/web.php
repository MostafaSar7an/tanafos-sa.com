<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Auth::routes();

Route::get('/', 'HomeController@index')->name('selection');

Route::group(['namespace' => 'Auth'], function () {

    Route::get('/login/{type}', 'LoginController@loginForm')->middleware('guest')->name('login.show');
    Route::post('/login', 'LoginController@login')->name('login');
    Route::get('/logout/{type}', 'LoginController@logout')->name('logout');

});
////==============================Posts============================
//Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
//Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
//Route::get('/posts', function (){return 'posts.store';})->name('posts.store');
//Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
//==============================Translate all pages============================
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth']
    ], function () {

    //==============================dashboard============================
    Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

    //==============================dashboard============================
    Route::group(['namespace' => 'Grades'], function () {
        Route::resource('Grades', 'GradeController');
    });

    //==============================Classrooms============================
    Route::group(['namespace' => 'Classrooms'], function () {
        Route::resource('Classrooms', 'ClassroomController');
        Route::post('delete_all', 'ClassroomController@delete_all')->name('delete_all');

        Route::post('Filter_Classes', 'ClassroomController@Filter_Classes')->name('Filter_Classes');

    });


    //==============================Sections============================

    Route::group(['namespace' => 'Sections'], function () {

        Route::resource('Sections', 'SectionController');

        Route::get('/classes/{id}', 'SectionController@getclasses');

    });

    //==============================parents============================

    Route::view('add_parent', 'livewire.show_Form')->name('add_parent');

    //==============================Teachers============================
    Route::group(['namespace' => 'Teachers'], function () {
        Route::resource('Teachers', 'TeacherController');
    });


    //==============================Students============================
    Route::group(['namespace' => 'Students'], function () {
        Route::resource('Students', 'StudentController');
        Route::resource('online_classes', 'OnlineClasseController');
        Route::get('indirect_admin', 'OnlineClasseController@indirectCreate')->name('indirect.create.admin');
        Route::post('indirect_admin', 'OnlineClasseController@storeIndirect')->name('indirect.store.admin');
        Route::resource('Graduated', 'GraduatedController');
        Route::resource('Promotion', 'PromotionController');
        Route::resource('Fees_Invoices', 'FeesInvoicesController');
        Route::resource('Fees', 'FeesController');
        Route::resource('receipt_students', 'ReceiptStudentsController');
        Route::resource('ProcessingFee', 'ProcessingFeeController');
        Route::resource('Payment_students', 'PaymentController');
        Route::resource('Attendance', 'AttendanceController');
        Route::get('download_file/{filename}', 'LibraryController@downloadAttachment')->name('downloadAttachment');
        Route::resource('library', 'LibraryController');
        Route::post('Upload_attachment', 'StudentController@Upload_attachment')->name('Upload_attachment');
        Route::get('Download_attachment/{studentsname}/{filename}', 'StudentController@Download_attachment')->name('Download_attachment');
        Route::post('Delete_attachment', 'StudentController@Delete_attachment')->name('Delete_attachment');
    });

    //==============================subjects============================
    Route::group(['namespace' => 'Subjects'], function () {
        Route::resource('subjects', 'SubjectController');
    });

    //==============================الأرصدة والبطاقات============================
    Route::group(['namespace' => 'BalanceAndCards'], function () {
        //====================شاشة عرض رصيد الطلاب============
        Route::resource('BalanceAndCards_Students_Show', 'Student_ShowController');
        //==================شاشة اصدار المنح والمكافأت============
        Route::resource('Cards_Create', 'Card_CreateController');
        //===============شاشة استعلامات المنح والمكافأت============
        Route::resource('Balance_Edite', 'Balance_EditeController');
        //================شاشة إسقاط المنح والمكافأت=============
        Route::resource('BalanceAndCards_','Gift_DropController');
    });

    //==============================المنح والمكافأت============================
    Route::group(['namespace' => 'Gifts'], function () {
        //====================شاشة بنود المنح والمكافأت============
        Route::resource('Gifts_Item', 'Gift_ItemController');
        //==================شاشة اصدار المنح والمكافأت============
        Route::resource('Gifts_Create', 'Gift_CreateController');
        //===============شاشة استعلامات المنح والمكافأت============
        Route::resource('Gifts_Inq', 'Gift_InqController');
        //================شاشة إسقاط المنح والمكافأت=============
        Route::resource('Gifts_Drop','Gift_DropController');
    });

    //==============================المخالفات============================
    Route::group(['namespace' => 'Infringements'], function () {
        //====================شاشة بنود المخالفات============
        Route::resource('Infringements_item', 'Infringement_itemController');
        //==================شاشة اصدار المخالفات============
        Route::resource('Infringements_item_Create', 'Infringement_CreateController');
        //===============شاشة استعلامات المخالفات============
        Route::resource('Infringements_Inq', 'Infringement_InqController');
        //================شاشة إسقاط المخالفات =============
        Route::resource('Infringements_Drop','Infringement_DropController');
    });

    //==============================Quizzes============================
    Route::group(['namespace' => 'Quizzes'], function () {
        Route::resource('Quizzes', 'QuizzController');
    });

    //==============================questions============================
    Route::group(['namespace' => 'questions'], function () {
        Route::resource('questions', 'QuestionController');
    });

    //==============================Setting============================
    Route::resource('settings', 'SettingController');
});
