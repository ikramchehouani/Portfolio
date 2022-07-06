package angers.chehouani.cocovoit;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.graphics.Color;
import android.graphics.Typeface;
import android.os.Bundle;
import android.view.Gravity;
import android.view.View;
import android.widget.ImageButton;
import android.widget.TextSwitcher;
import android.widget.TextView;
import android.widget.ViewSwitcher;

public class Home extends AppCompatActivity {
    ImageButton btPrevious,btNext;
    TextSwitcher textSwitcher;
    String[] strings = {"Bienvenue","Welcome","مرحبا"};
    int count = strings.length;
    int position = 0;



    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_home);

        btPrevious = findViewById(R.id.bt_previous);
        btNext = findViewById(R.id.bt_next);
        textSwitcher = findViewById(R.id.text_switcher);
        textSwitcher.setFactory(new ViewSwitcher.ViewFactory() {
            @Override
            public View makeView() {
                TextView textView = new TextView(Home.this);
                textView.setText("Bienvenue");
                textView.setTextSize(30);
                textView.setTextColor(Color.rgb(33, 150, 243));
                textView.setGravity(Gravity.CENTER);
                Typeface customFont = Typeface.createFromAsset(getAssets(),"fonts/Hello.otf");
                textView.setTypeface(customFont);
                textView.setTypeface(customFont);
                return textView;
            }
        });

        btNext.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                position++;
                if(position == count)
                    position = 0;
                textSwitcher.setText(strings[position]);
            }
        });

        btPrevious.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                textSwitcher.showPrevious();
                --position;
                if(position<0)
                    position = strings.length-1;
                textSwitcher.setText(strings[position]);
            }
        });

    }
    public void pageInsc(View v){
        Intent i = new Intent(Home.this,Inscription.class);
        startActivity(i);
    }

    public void pageConex(View v){
        Intent i = new Intent(Home.this,Connexion.class);
        startActivity(i);
    }
}