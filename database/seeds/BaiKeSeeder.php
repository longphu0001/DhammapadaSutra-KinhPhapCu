<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BaiKeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('baike')->delete();
        $baike = array(
            array('id' => '1', 'content' => 'Ý dẫn đầu các pháp,<br>Ý làm chủ, ý tạo;<br>Nếu với ý ô nhiễm,<br>Nói lên hay hành động,<br>Khổ não bước theo sau,<br> Như xe, chân vật kéo.<br>', 'number' => '1', 'pham' => 'pham-song-yeu', 'img_url' => 'img/pham-song-yeu/pham-song-yeu-001.jpg'),
            array('id' => '2', 'content' => 'Ý dẫn đầu các pháp,<br>Ý làm chủ, ý tạo;<br>Nếu với ý thanh tịnh,<br>Nói lên hay hành động,<br>An lạc bước theo sau,<br>Như bóng, không rời hình.<br>', 'number' => '2', 'pham' => 'pham-song-yeu', 'img_url' => 'img/pham-song-yeu/pham-song-yeu-002.jpg'),
            array('id' => '3', 'content' => 'Nó mắng tôi, đánh tôi,<br>Nó thắng tôi, cướp tôi<br>Ai ôm hiềm hận ấy,<br>Hận thù không thể nguôi.<br>', 'number' => '3', 'pham' => 'pham-song-yeu', 'img_url' => 'img/pham-song-yeu/pham-song-yeu-003.jpg'),
            array('id' => '4', 'content' => 'Nó mắng tôi, đánh tôi,<br>Nó thắng tôi, cướp tôi<br>Không ôm hiềm hận ấy,<br>Hận thù được tự nguôi.<br>', 'number' => '4', 'pham' => 'pham-song-yeu', 'img_url' => 'img/pham-song-yeu/pham-song-yeu-004.jpg'),
            array('id' => '5', 'content' => 'Với hận diệt hận thù,<br>Ðời này không có được.<br>Không hận diệt hận thù,<br>Là định luật ngàn thu.<br>', 'number' => '5', 'pham' => 'pham-song-yeu', 'img_url' => 'img/pham-song-yeu/pham-song-yeu-005.jpg'),
            array('id' => '6', 'content' => 'Và người khác không biết,<br>Chúng ta đây bị hại.<br>Chỗ ấy, ai hiểu được<br>Tranh luận được lắng êm.<br>', 'number' => '6', 'pham' => 'pham-song-yeu', 'img_url' => 'img/pham-song-yeu/pham-song-yeu-006.jpg'),
            array('id' => '7', 'content' => 'Ai sống nhìn tịnh tướng,<br>Không hộ trì các căn,<br>ăn uống thiếu tiết độ,<br>biếng nhác, chẳng tinh cần.<br>Ma uy hiếp kẻ ấy,<br>như cây yếu trước gió.<br>', 'number' => '7', 'pham' => 'pham-song-yeu', 'img_url' => 'img/pham-song-yeu/pham-song-yeu-007.jpg'),
            array('id' => '8', 'content' => 'Ai sống quán bất tịnh,<br>Khéo hộ trì các căn,<br>ăn uống có tiết độ,<br>Có lòng tin, tinh cần,<br>Ma không uy hiếp được,<br>Như núi đá, trước gió.<br>', 'number' => '8', 'pham' => 'pham-song-yeu', 'img_url' => 'img/pham-song-yeu/pham-song-yeu-008.jpg'),
            array('id' => '9', 'content' => 'Ai mặc áo cà sa.<br>tâm chưa rời uế trược,<br>không tự chế, không thực,<br>không xứng áo cà sa<br>', 'number' => '9', 'pham' => 'pham-song-yeu', 'img_url' => 'img/pham-song-yeu/pham-song-yeu-009.jpg'),
            array('id' => '10', 'content' => 'Ai rời bỏ uế trược,<br>giới luật khéo nghiêm trì,<br>tự chế, sống chơn thực,<br>thật xứng áo cà sa.<br>', 'number' => '10', 'pham' => 'pham-song-yeu', 'img_url' => 'img/pham-song-yeu/pham-song-yeu-010.jpg'),
            array('id' => '11', 'content' => 'Không chân, tưởng chân thật,<br>chân thật, thấy không chân:<br>chúng không đạt chân thật,<br>do tà tư, tà hạnh.<br>', 'number' => '11', 'pham' => 'pham-song-yeu', 'img_url' => 'img/pham-song-yeu/pham-song-yeu-011.jpg'),
            array('id' => '12', 'content' => 'Chân thật, biết chân thật,<br>Không chân, biết không chân:<br>chúng đạt được chân thật,<br>do chánh tư, chánh hạnh.<br>', 'number' => '12', 'pham' => 'pham-song-yeu', 'img_url' => 'img/pham-song-yeu/pham-song-yeu-012.jpg'),
            array('id' => '13', 'content' => 'Như mái nhà vụng lợp,<br>Mưa liền xâm nhập vào.<br>Cũng vậy tâm không tu,<br>Tham dục liền xâm nhập.<br>', 'number' => '13', 'pham' => 'pham-song-yeu', 'img_url' => 'img/pham-song-yeu/pham-song-yeu-013.jpg'),
            array('id' => '14', 'content' => 'Như ngôi nhà khéo lợp,<br>Mưa không xâm nhập vào.<br>Cũng vậy tâm khéo tu,<br>Tham dục không xâm nhập.<br>', 'number' => '14', 'pham' => 'pham-song-yeu', 'img_url' => 'img/pham-song-yeu/pham-song-yeu-014.jpg'),
            array('id' => '15', 'content' => 'Nay sầu, đời sau sầu,<br>Kẻ ác, hai đời sầu;<br>Nó sầu, nó ưu não,<br>Thấy nghiệp uế mình làm.<br>', 'number' => '15', 'pham' => 'pham-song-yeu', 'img_url' => 'img/pham-song-yeu/pham-song-yeu-015.jpg'),
            array('id' => '16', 'content' => 'Nay vui, đời sau vui,<br>Làm phước, hai đời vui,<br>Nó vui, nó an vui,<br>Thấy nghiệp tịnh mình làm.<br>', 'number' => '16', 'pham' => 'pham-song-yeu', 'img_url' => 'img/pham-song-yeu/pham-song-yeu-016.jpg'),
            array('id' => '17', 'content' => 'Nay than, đời sau than,<br>Kẻ ác, hai đời than,<br>Nó than: ‘Ta làm ác’<br>Ðọa cõi dữ, than hơn.<br>', 'number' => '17', 'pham' => 'pham-song-yeu', 'img_url' => 'img/pham-song-yeu/pham-song-yeu-017.jpg'),
            array('id' => '18', 'content' => 'Nay sướng, đời sau sướng,<br>Làm phước, hai đời sướng.<br>Nó sướng: ‘Ta làm thiện’,<br>Sanh cõi lành, sướng hơn.<br>', 'number' => '18', 'pham' => 'pham-song-yeu', 'img_url' => 'img/pham-song-yeu/pham-song-yeu-018.jpg'),
            array('id' => '19', 'content' => 'Nếu người nói nhiều kinh,<br>Không hành trì, phóng dật;<br>Như kẻ chăn bò người,<br>Không phần Sa môn hạnh.<br>', 'number' => '19', 'pham' => 'pham-song-yeu', 'img_url' => 'img/pham-song-yeu/pham-song-yeu-019.jpg'),
            array('id' => '20', 'content' => 'Dầu nói ít kinh điển,<br>Nhưng hành pháp, tùy pháp,<br>Từ bỏ tham, sân, si,<br>Tĩnh giác, tâm giải thoát,<br>Không chấp thủ hai đời,<br>Dự phần Sa môn hạnh.<br>', 'number' => '20', 'pham' => 'pham-song-yeu', 'img_url' => 'img/pham-song-yeu/pham-song-yeu-020.jpg'),
            array('id' => '21', 'content' => 'Không phóng dật, đường sống,<br>Phóng dật là đường chết.<br>Không phóng dật, không chết,<br>Phóng dật như chết rồi.<br>', 'number' => '21', 'pham' => 'pham-khong-phong-dat', 'img_url' => 'img/pham-khong-phong-dat/pham-khong-phong-dat-021.jpg'),
            array('id' => '22', 'content' => 'Biết rõ sai biệt ấy,<br>Người trí không phóng dật,<br>Hoan hỷ, không phóng dật,<br>An vui hạnh bậc Thánh.<br>', 'number' => '22', 'pham' => 'pham-khong-phong-dat', 'img_url' => 'img/pham-khong-phong-dat/pham-khong-phong-dat-022.jpg'),
            array('id' => '23', 'content' => 'Người hằng tu thiền định,<br>Thường kiên trì tinh tấn.<br>Bậc trí hưởng Niết Bàn,<br>Ðạt an tịnh vô thượng.<br>', 'number' => '23', 'pham' => 'pham-khong-phong-dat', 'img_url' => 'img/pham-khong-phong-dat/pham-khong-phong-dat-023.jpg'),
            array('id' => '24', 'content' => 'Nỗ lực, giữ chánh niệm,<br>Tịnh hạnh, hành thận trọng<br>Tự điều, sống theo pháp,<br>Ai sống không phóng dật,<br>Tiếng lành ngày tăng trưởng.<br>', 'number' => '24', 'pham' => 'pham-khong-phong-dat', 'img_url' => 'img/pham-khong-phong-dat/pham-khong-phong-dat-024.jpg'),
            array('id' => '25', 'content' => 'Nỗ lực, không phóng dật,<br>Tự điều, khéo chế ngự.<br>Bậc trí xây hòn đảo,<br>Nước lụt khó ngập tràn.<br>', 'number' => '25', 'pham' => 'pham-khong-phong-dat', 'img_url' => 'img/pham-khong-phong-dat/pham-khong-phong-dat-025.jpg'),
            array('id' => '26', 'content' => 'Chúng ngu si, thiếu trí,<br>Chuyên sống đời phóng dật.<br>Người trí, không phóng dật,<br>Như giữ tài sản quý.<br>', 'number' => '26', 'pham' => 'pham-khong-phong-dat', 'img_url' => 'img/pham-khong-phong-dat/pham-khong-phong-dat-026.jpg'),
            array('id' => '27', 'content' => 'Chớ sống đời phóng dật,<br>Chớ mê say dục lạc.<br>Không phóng dật, thiền định,<br>Ðạt được an lạc lớn.<br>', 'number' => '27', 'pham' => 'pham-khong-phong-dat', 'img_url' => 'img/pham-khong-phong-dat/pham-khong-phong-dat-027.jpg'),
            array('id' => '28', 'content' => 'Người trí dẹp phóng dật,<br>Với hạnh không phóng dật,<br>Leo lầu cao trí tuệ,<br>Không sầu, nhìn khổ sầu,<br>Bậc trí đứng núi cao,<br>Nhìn kẻ ngu, đất bằng.<br>', 'number' => '28', 'pham' => 'pham-khong-phong-dat', 'img_url' => 'img/pham-khong-phong-dat/pham-khong-phong-dat-028.jpg'),
            array('id' => '29', 'content' => 'Tinh cần giữa phóng dật,<br>Tỉnh thức giữa quần mê.<br>Người trí như ngựa phi,<br>Bỏ sau con ngựa hèn.<br>', 'number' => '29', 'pham' => 'pham-khong-phong-dat', 'img_url' => 'img/pham-khong-phong-dat/pham-khong-phong-dat-029.jpg'),
            array('id' => '30', 'content' => 'Ðế Thích không phóng dật,<br>Ðạt ngôi vị Thiên chủ.<br>Không phóng dật, được khen ;<br>Phóng dật, thường bị trách.<br>', 'number' => '30', 'pham' => 'pham-khong-phong-dat', 'img_url' => 'img/pham-khong-phong-dat/pham-khong-phong-dat-030.jpg'),
            array('id' => '31', 'content' => 'Vui thích không phóng dật,<br>Tỷ kheo sợ phóng dật,<br>Bước tới như lửa hừng,<br>Thiêu kiết sử lớn nhỏ.<br>', 'number' => '31', 'pham' => 'pham-khong-phong-dat', 'img_url' => 'img/pham-khong-phong-dat/pham-khong-phong-dat-031.jpg'),
            array('id' => '32', 'content' => 'Vui thích không phóng dật,<br>Tỷ kheo sợ phóng dật,<br>Không thể bị thối đọa,<br>Nhất định gần Niết Bàn.<br>', 'number' => '32', 'pham' => 'pham-khong-phong-dat', 'img_url' => 'img/pham-khong-phong-dat/pham-khong-phong-dat-032.jpg'),
            array('id' => '33', 'content' => 'Tâm hoảng hốt giao động,<br>Khó hộ trì, khó nhiếp,<br>Người trí làm tâm thẳng,<br>Như thợ tên, làm tên.<br>', 'number' => '33', 'pham' => 'pham-tam', 'img_url' => 'img/pham-tam/pham-tam-033.jpg'),
            array('id' => '34', 'content' => 'Như cá quăng lên bờ,<br>Vất ra ngoài thủy giới;<br>Tâm này vùng vẫy mạnh,<br>Hãy đoạn thế lực Ma.<br>', 'number' => '34', 'pham' => 'pham-tam', 'img_url' => 'img/pham-tam/pham-tam-034.jpg'),
            array('id' => '35', 'content' => 'Khó nắm giữ, khinh động,<br>Theo các dục quay cuồng.<br>Lành thay, điều phục tâm;<br>Tâm điều, an lạc đến.<br>', 'number' => '35', 'pham' => 'pham-tam', 'img_url' => 'img/pham-tam/pham-tam-035.jpg'),
            array('id' => '36', 'content' => 'Tâm khó thấy, tế nhị,<br>Theo các dục quay cuồng.<br>Người trí phòng hộ tâm,<br>Tâm hộ, an lạc đến.<br>', 'number' => '36', 'pham' => 'pham-tam', 'img_url' => 'img/pham-tam/pham-tam-036.jpg'),
            array('id' => '37', 'content' => 'Chạy xa, sống một mình,<br>Không thân, ẩn hang sâu [1]<br>Ai điều phục được tâm,<br>Thoát khỏi Ma trói buộc. [2]<br>', 'number' => '37', 'pham' => 'pham-tam', 'img_url' => 'img/pham-tam/pham-tam-037.jpg'),
            array('id' => '38', 'content' => 'Ai tâm không an trú,<br>Không biết chân diệu pháp,<br>Tịnh tín bị rúng động,<br>Trí tuệ không viên thành.<br>', 'number' => '38', 'pham' => 'pham-tam', 'img_url' => 'img/pham-tam/pham-tam-038.jpg'),
            array('id' => '39', 'content' => 'Tâm không đầy tràn dục,<br>Tâm không (hận) công phá,<br>Ðoạn tuyệt mọi thiện ác,<br>Kẻ tỉnh không sợ hãi.<br>', 'number' => '39', 'pham' => 'pham-tam', 'img_url' => 'img/pham-tam/pham-tam-039.jpg'),
            array('id' => '40', 'content' => 'Biết thân như đồ gốm,<br>Trú tâm như thành trì,<br>Chống Ma với gươm trí ;<br>Giữ chiến thắng [3] không tham [4]<br>', 'number' => '40', 'pham' => 'pham-tam', 'img_url' => 'img/pham-tam/pham-tam-040.jpg'),
            array('id' => '41', 'content' => 'Không bao lâu thân này,<br>Sẽ nằm dài trên đất,<br>Bị vất bỏ, vô thức,<br>Như khúc cây vô dụng.<br>', 'number' => '41', 'pham' => 'pham-tam', 'img_url' => 'img/pham-tam/pham-tam-041.jpg'),
            array('id' => '42', 'content' => 'Kẻ thù hại kẻ thù,<br>Oan gia hại oan gia,<br>Không bằng tâm hướng tà, [5]<br>Gây ác cho tự thân.<br>', 'number' => '42', 'pham' => 'pham-tam', 'img_url' => 'img/pham-tam/pham-tam-042.jpg'),
            array('id' => '43', 'content' => 'Ðiều mẹ cha bà con,<br>Không có thể làm được,<br>Tâm hướng chánh làm được<br>Làm được tốt đẹp hơn.<br>', 'number' => '43', 'pham' => 'pham-tam', 'img_url' => 'img/pham-tam/pham-tam-043.jpg'),
            array('id' => '44', 'content' => 'Ai chinh phục đất này<br>Dạ ma, Thiên giới này?<br>Ai khéo giảng Pháp cú,<br>Như người khéo hái hoa?<br>', 'number' => '44', 'pham' => 'pham-hoa', 'img_url' => 'img/pham-hoa/pham-hoa-044.jpg'),
            array('id' => '45', 'content' => 'Hữu học chinh phục đất,<br>Dạ ma, Thiên giới này.<br>Hữu học giảng Pháp cú,<br>Như người khéo hái hoa.<br>', 'number' => '45', 'pham' => 'pham-hoa', 'img_url' => 'img/pham-hoa/pham-hoa-045.jpg'),
            array('id' => '46', 'content' => 'Biết thân như bọt nước,<br>Ngộ thân là như huyễn,<br>Bẻ tên hoa của ma,<br>Vượt tầm mắt thần chết.<br>', 'number' => '46', 'pham' => 'pham-hoa', 'img_url' => 'img/pham-hoa/pham-hoa-046.jpg'),
            array('id' => '47', 'content' => 'Người nhặt các loại hoa,<br>Ý đắm say, tham nhiễm,<br>Bị thần chết mang đi,<br>Như lụt trôi làng ngủ.<br>', 'number' => '47', 'pham' => 'pham-hoa', 'img_url' => 'img/pham-hoa/pham-hoa-047.jpg'),
            array('id' => '48', 'content' => 'Người nhặt các loại hoa,<br>Ý đắm say tham nhiễm,<br>Các dục chưa thỏa mãn,<br>Ðã bị chết chinh phục.<br>', 'number' => '48', 'pham' => 'pham-hoa', 'img_url' => 'img/pham-hoa/pham-hoa-048.jpg'),
            array('id' => '49', 'content' => 'Như ong đến với hoa,<br>Không hại sắc và hương,<br>Che chở hoa, lấy nhụy.<br>Bậc Thánh đi vào làng.<br>', 'number' => '49', 'pham' => 'pham-hoa', 'img_url' => 'img/pham-hoa/pham-hoa-049.jpg'),
            array('id' => '50', 'content' => 'Không nên nhìn lỗi người,<br>Người làm hay không làm.<br>Nên nhìn tự chính mình.<br>Có làm hay không làm.<br>', 'number' => '50', 'pham' => 'pham-hoa', 'img_url' => 'img/pham-hoa/pham-hoa-050.jpg'),
            array('id' => '51', 'content' => 'Như bông hoa tươi đẹp,<br>Có sắc nhưng không hương.<br>Cũng vậy, lời khéo nói,<br>Không làm, không kết quả.<br>', 'number' => '51', 'pham' => 'pham-hoa', 'img_url' => 'img/pham-hoa/pham-hoa-051.jpg'),
            array('id' => '52', 'content' => 'Như bông hoa tươi đẹp,<br>Có sắc lại thêm hương;<br>Cũng vậy, lời khéo nói,<br>Có làm, có kết quả.<br>', 'number' => '52', 'pham' => 'pham-hoa', 'img_url' => 'img/pham-hoa/pham-hoa-052.jpg'),
            array('id' => '53', 'content' => 'Như từ một đống hoa,<br>Nhiều tràng hoa được làm.<br>Cũng vậy, thân sanh tử,<br>Phải làm nhiều việc lành.<br>', 'number' => '53', 'pham' => 'pham-hoa', 'img_url' => 'img/pham-hoa/pham-hoa-053.jpg'),
            array('id' => '54', 'content' => 'Hương các loại hoa thơm<br>Không ngược bay chiều gió<br>Nhưng hương người đức hạnh<br>Ngược gió khắp tung bay<br>Chỉ có bậc chân nhân<br>Tỏa khắp mọi phương trời.<br>', 'number' => '54', 'pham' => 'pham-hoa', 'img_url' => 'img/pham-hoa/pham-hoa-054.jpg'),
            array('id' => '55', 'content' => 'Hoa chiên đàn, già la,<br>Hoa sen, hoa vũ quý,<br>Giữa những hương hoa ấy,<br>Giới hương là vô thượng.<br>', 'number' => '55', 'pham' => 'pham-hoa', 'img_url' => 'img/pham-hoa/pham-hoa-055.jpg'),
            array('id' => '56', 'content' => 'Ít giá trị hương này,<br>Hương già la, chiên đàn;<br>Chỉ hương người đức hạnh,<br>Tối thượng tỏa Thiên giới.<br>', 'number' => '56', 'pham' => 'pham-hoa', 'img_url' => 'img/pham-hoa/pham-hoa-056.jpg'),
            array('id' => '57', 'content' => 'Nhưng ai có giới hạnh,<br>An trú không phóng dật,<br>Chánh trí, chơn giải thoát,<br>Ác ma không thấy đường.<br>', 'number' => '57', 'pham' => 'pham-hoa', 'img_url' => 'img/pham-hoa/pham-hoa-057.jpg'),
            array('id' => '58', 'content' => 'Như giữa đống rác nhớp,<br>Quăng bỏ trên đường lớn,<br>Chỗ ấy hoa sen nở,<br>Thơm sạch, đẹp ý người.<br>', 'number' => '58', 'pham' => 'pham-hoa', 'img_url' => 'img/pham-hoa/pham-hoa-058.jpg'),
            array('id' => '59', 'content' => 'Cũng vậy giữa quần sanh,<br>Uế nhiễm, mù, phàm tục,<br>Ðệ tử bậc Chánh Giác,<br>Sáng ngời với Tuệ Trí.<br>', 'number' => '59', 'pham' => 'pham-hoa', 'img_url' => 'img/pham-hoa/pham-hoa-059.jpg'),
        );
        DB::table('baike')->insert($baike);
    }
}
