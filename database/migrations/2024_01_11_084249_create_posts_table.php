<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('user_id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('excerpt');
            $table->text('body');
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};



/*
App\Models\Post::create([
    'title' => 'Sempak Kuda',
    'category_id' => 3,
    'slug' => 'sempak-kuda',
    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis porro repudiandae saepe minus ipsam cumque adipisci atque consequatur ducimus, assumenda suscipit architecto at praesentium in. Reiciendis perferendis soluta iure eos aperiam illum laboriosam quam explicabo consequuntur corrupti voluptatibus animi harum numquam earum amet consectetur impedit quisquam, ut',
    'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis porro repudiandae saepe minus ipsam cumque adipisci atque consequatur ducimus, assumenda suscipit architecto at praesentium in. Reiciendis perferendis soluta iure eos aperiam illum laboriosam quam explicabo consequuntur corrupti voluptatibus animi harum numquam earum amet consectetur impedit quisquam, ut distinctio esse vel nemo commodi quas nesciunt? Architecto rerum at repellendus, eligendi quibusdam molestias sed aliquam vitae reiciendis ab, rem inventore esse repudiandae itaque porro! Doloremque molestiae consectetur soluta dolorem cupiditate nisi perferendis beatae. Nesciunt suscipit similique perspiciatis iure laborum laudantium eligendi aliquid obcaecati, quo natus fugit adipisci. Libero ad perferendis dignissimos sapiente!</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum repellendus sunt totam distinctio fuga earum voluptates, est fugiat! Eius porro quaerat, vero dignissimos provident tempora quisquam corporis aspernatur ea hic eum atque eaque omnis consequuntur, sit mollitia, doloremque praesentium aperiam. Voluptatem eius id unde provident fugiat? Dolore pariatur autem porro qui, natus, quos excepturi suscipit debitis architecto nemo modi, dignissimos nostrum temporibus vitae ipsa cum voluptatum! Obcaecati dolorem, est unde quam voluptates quos excepturi, necessitatibus, odio asperiores aperiam impedit temporibus! Expedita et perspiciatis enim ducimus iure maiores doloremque at voluptatum labore minima, assumenda in nesciunt, soluta architecto laboriosam esse! Facilis.</p>',
]);
*/
