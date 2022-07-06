package angers.chehouani.cocovoit;

import androidx.activity.result.ActivityResultLauncher;
import androidx.activity.result.contract.ActivityResultContract;
import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.appcompat.app.AppCompatActivity;

import android.content.Context;
import android.content.Intent;
import android.net.Uri;
import android.os.Bundle;

import com.theartofdev.edmodo.cropper.CropImage;
import com.theartofdev.edmodo.cropper.CropImageActivity;
import com.theartofdev.edmodo.cropper.CropImageView;

import angers.chehouani.cocovoit.databinding.ActivityProfilBinding;
import de.hdodenhof.circleimageview.CircleImageView;

public class Profil extends AppCompatActivity {
    ActivityProfilBinding binding;
    ActivityResultLauncher<Object> cropActivityResultLauncher;
    ActivityResultContract<Object, Uri> activityResultContract = new ActivityResultContract<Object, Uri>() {
        @NonNull
        @Override
        public Intent createIntent(@NonNull Context context, Object input) {
            return CropImage.activity()
                    .setCropShape(CropImageView.CropShape.OVAL)
                    .setAspectRatio(1, 1)
                    .getIntent(getApplicationContext());
        }

        @Override
        public Uri parseResult(int resultCode, @Nullable Intent intent) {
            if (CropImage.getActivityResult(intent) != null) {
                return CropImage.getActivityResult(intent).getUri();
            } else {
                return null;
            }
        }
    };

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        binding = ActivityProfilBinding.inflate(getLayoutInflater());
        setContentView(binding.getRoot());
        cropActivityResultLauncher = registerForActivityResult(activityResultContract, uri -> {
            if(uri!=null){
                binding.profileImage.setImageURI(uri);
            }
        });
        binding.profileImage.setOnClickListener(v->cropActivityResultLauncher.launch(null));
    }
}
